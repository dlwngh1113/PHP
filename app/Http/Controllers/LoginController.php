<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    function login()
    {
        return view('user.login');
    }

    function register()
    {
        return view('user.register');
    }

    function verificate_register(Request $request)
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
        ]);

        event(new Registered($user));

        $request->session()->flash('message', 'please check your email verification');

        return redirect()->back();
    }

    function verificate_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember_me))
        {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors('message', 'Login details are not validated')->withInput($request->except('password'));
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
