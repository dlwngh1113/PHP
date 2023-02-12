<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\VerificationEmail;

class LoginController extends Controller
{
    //

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    function validate_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_verification_token' => Str::random(32),
        ]);

        Mail::to($user->email)->send(new VerificationEmail($user));

        $request->session()->flash('message', 'please check your email verification');

        return redirect()->back();
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('success', 'Login details are not validated');
    }

    function reset_password(Request $request)
    {

    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
