<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class VerificationController extends Controller
{
    function verify($token = null)
    {
        if($token == null) {
    		session()->flash('message', 'Invalid Login attempt');
    		return redirect()->route('login');
    	}

       $user = User::where('email_verification_token',$token)->first();
       if($user == null )
       {
       	  session()->flash('message', 'Invalid Login attempt');
          return redirect()->route('login');
       }

       $user->update([
          'email_verified' => 1,
          'email_verified_at' => Carbon::now(),
          'email_verification_token' => ''
       ]);

       session()->flash('message', 'Your account is activated, you can log in now');
       return redirect()->route('login');
    }
}
