<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreeBoardController extends Controller
{
    //
    function index()
    {
        $posts = DB::table('free_board_posts')
                ->join('users', 'user_id', '=', 'users.id')
                ->select('users.name', 'free_board_posts.*')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        return view('freeboard.index', ['posts' => $posts]);
    }

    function show($id)
    {
        $post = DB::table('free_board_posts')->find($id);

        return view('freeboard.post', ['post' => $post]);
    }

    function store()
    {
    }
}
