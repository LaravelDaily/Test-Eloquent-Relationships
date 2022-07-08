<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->firstOrFail()->id;
        return [
            'name' => $this->faker->word,
            'users_id' => $userId,
        ];
    }
}
