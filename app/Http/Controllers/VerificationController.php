<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    function notice()
    {
        return view('verification.notice');
    }

    function verify_email(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('home');
    }
}
