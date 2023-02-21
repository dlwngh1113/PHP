<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommentLikeController extends Controller
{
    public function verificate_like($commentId)
    {
        $userId = Auth::user()->id;
        $result = DB::table('comment_likes')->where('comment_id', $commentId)->and('user_id', $userId)->first();

        if ($result)
        {
            DB::table('comments')->increment('like', 1, ['id' => $commentId]);
            DB::table('comment_likes')->insert([
                'user_id' => $userId,
                'comment_id' => $commentId,
            ]);

            Session::flush();
        }

        return redirect()->back()->withErrors('error', 'You cant like twice in same comment');
    }

    public function verificate_dislike()
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
