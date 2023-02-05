<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

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

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->route('login')->with('success', 'Registeration Completed, now you can login');
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
