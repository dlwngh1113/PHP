<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomEscape>
 */
class RoomEscapeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->text(),
            'playable_user_cnt' => rand(2,6),
            'play_time' => rand(45, 60),
        ];
    }
}
