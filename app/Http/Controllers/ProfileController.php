<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Models\User;

class ProfileController extends Controller
{
    function index()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    function reset_password(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6'
        ]);


    }
}
