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
        $users = User::factory()
        ->count(10)->create();

        $boards = Board::factory()
        ->count(5)->create();

        Post::factory()
        ->count(100)
        ->for([$users[rand(0, 9)], $boards[rand(0, 4)]])
        ->create();
    }
}
