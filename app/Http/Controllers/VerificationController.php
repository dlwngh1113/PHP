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

    function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        $request->session()->flash('message', 'Your account is activated, you can log in now');
        return redirect()->route('home');
    }
    
    function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        
        $request->session()->flash('message', 'Verification link sent!');
        return back();
    }
}
