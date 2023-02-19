<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Board;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $boards = Board::factory()->count(5)->create();
        $users = User::factory()->count(10)->create();
        $posts = Post::factory()->count(100)->create();
        $comments = Comment::factory()->count(500)->create();
    }
}
