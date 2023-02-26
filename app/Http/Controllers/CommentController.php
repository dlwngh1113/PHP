<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\Comment;

class CommentController extends Controller
{
    function __contstruct()
    {
        $this->middleware(['auth', 'verified']);
    }

    function register(Request $request)
    {
        $data = $request->all();

        Comment::create([
            'content' => $data['content'],
            'post_id' => $data['postId'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->back();
    }

    function verificate_like($commentId)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $commentId)->where('user_id', $userId)->first();

        if ($result)
        {
            return redirect()->back()->withErrors('message', 'You already liked this comment');
        }

        DB::table('comments')->where('id', $commentId)->increment('like');
        DB::table('comment_likes')->insert([
            'user_id' => $userId,
            'comment_id' => $commentId,
        ]);

        return redirect()->back();
    }

    function verificate_dislike($commentId)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $commentId)->where('user_id', $userId)->first();

        if ($result)
        {
            return redirect()->back()->withErrors('message', 'You already liked this comment');
        }

        DB::table('comments')->where('id', $commentId)->increment('dislike');
        DB::table('comment_likes')->insert([
            'user_id' => $userId,
            'comment_id' => $commentId,
        ]);

        return redirect()->back();
    }
}
