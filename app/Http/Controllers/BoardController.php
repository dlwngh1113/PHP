<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('board.index', ['id' => $id, 'posts' => DB::table('posts')->where('board_id', $id)->orderBy('created_at', 'DESC')->paginate(20)]);
    }
}
