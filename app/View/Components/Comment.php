<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Comment extends Component
{
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postId)
    {
        $this->comments = DB::table('comments')
                        ->join('users', 'comments.user_id', '=', 'users.id')
                        ->where('post_id', $postId)
                        ->select('users.name', 'comments.*')
                        ->orderBy('comments.created_at')
                        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
