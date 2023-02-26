<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Carbon\Carbon;

use App\Models\User;

class VerificationController extends Controller
{
    function notice()
    {
        return view('verification.notice');
    }

    // function verify($token = null)
    // {
    //     if($token == null) {
    // 		session()->flash('message', 'Invalid Login attempt');
    // 	    return redirect()->route('login');
    //     }

    //     $user = User::where('email_verification_token',$token)->first();

    //     if($user == null )
    //     {
    //        session()->flash('message', 'Invalid Login attempt');
    //        return redirect()->route('login');
    //     }

    //     $user->update([
    //         'email_verified' => true,
    //         'email_verified_at' => Carbon::now()->getTimestamp(),
    //         'email_verification_token' => ''
    //     ]);

    //     session()->flash('message', 'Your account is activated, you can log in now');
    //     return redirect()->route('login');
    // }

    function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        session()->flash('message', 'Your account is activated, you can log in now');
        return redirect()->route('home');
    }
}
