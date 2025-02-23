<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'age' => fake()->numberBetween(16, 25),
            'address' => fake()->address(),
            'year_level' => fake()->numberBetween(1, 4),
        ];
    }
}
