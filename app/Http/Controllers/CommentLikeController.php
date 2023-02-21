<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommentLikeController extends Controller
{
    function verificate_like($comment)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $comment)->where('user_id', $userId)->first();

        if ($result)
        {
            return redirect()->back()->withErrors('message', 'You cant like twice in same comment');
        }

        DB::table('comments')->increment('like', 1, ['id' => $comment]);
        DB::table('comment_likes')->insert([
            'user_id' => $userId,
            'comment_id' => $comment,
        ]);

        Session::flush();
        return redirect()->back();
    }

    function verificate_dislike(Request $request)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $commentId)->and('user_id', $userId)->first();

        if ($result)
        {
            DB::table('comments')->increment('dislike', 1, ['id' => $commentId]);
            DB::table('comment_likes')->insert([
                'user_id' => $userId,
                'comment_id' => $commentId,
            ]);

            Session::flush();
        }

        return redirect()->back()->withErrors('error', 'You cant dislike twice in same comment');
    }
}
