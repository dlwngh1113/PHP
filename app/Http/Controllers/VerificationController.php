<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

use App\Models\User;

class VerificationController extends Controller
{
    function notice()
    {
        return view('verification.notice');
    }

    function verify($token = null)
    {
        if($token == null) {
    		session()->flash('message', 'Invalid Login attempt');
    	    return redirect()->route('login')->with('success', 'Invalid Login attempt');
        }

        $user = User::where('email_verification_token',$token)->first();

        if($user == null )
        {
           session()->flash('message', 'Invalid Login attempt');
           return redirect()->route('login')->with('success', 'Invalid Login attempt');
        }

        $user->update([
            'email_verified' => true,
            'email_verified_at' => Carbon::now()->getTimestamp(),
            'email_verification_token' => ''
        ]);

        session()->flash('success', 'Your account is activated, you can log in now');
        return redirect()->route('login')->with('success', 'Your account is activated, you can log in now');
    }
}
