<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreeBoardController extends Controller
{
    //
    function index()
    {
        return view('freeboard.index', ['posts' => DB::table('free_board_posts')->paginate()]);
    }
}
