<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Models\User;

class ProfileController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified')->except('index');
    }

    function index()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    function reset_password(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6'
        ]);

        if (Hash::check($request->password, $request->user()->password))
        {
            $request->session()->flash('message', 'New password must be difference with previous one');

            return redirect()->back();
        }

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    function delete_user()
    {

    }
}
