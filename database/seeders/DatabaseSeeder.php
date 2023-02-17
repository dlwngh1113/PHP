<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Board;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $boards = Board::factory()
        ->count(5)->create();

        $users = User::factory()->count(10)->create()->each(function ($user){
             Post::factory()->count(10)->create(['user_id' => $user->id, 'board_id' => $boards[rand(0,4)]->id]);
        });
    }
}
