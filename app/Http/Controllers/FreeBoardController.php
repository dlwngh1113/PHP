<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeBoardController extends Controller
{
    //
    function index()
    {
        return view('freeboard.index');
    }
}
