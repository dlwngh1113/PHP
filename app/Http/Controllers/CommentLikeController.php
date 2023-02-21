<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommentLikeController extends Controller
{
    function verificate_like($commentId)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $commentId)->where('user_id', $userId)->first();

        if ($result)
        {
            return redirect()->back()->withErrors('message', 'You cant like twice in same comment');
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
            return redirect()->back()->withErrors('message', 'You cant dislike twice in same comment');
        }

        DB::table('comments')->where('id', $commentId)->increment('dislike');
        DB::table('comment_likes')->insert([
            'user_id' => $userId,
            'comment_id' => $commentId,
        ]);

        return redirect()->back();
    }
}
