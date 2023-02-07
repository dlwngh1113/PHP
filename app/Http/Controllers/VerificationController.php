<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\URL;

class VerificationController extends Controller
{
    function notice()
    {
        return view('verification.notice');
    }

    function verify_email(EmailVerificationRequest $request)
    {
        return URL::sigendRoute('unsubscribe', ['user' => $request->user]);
    }
}
