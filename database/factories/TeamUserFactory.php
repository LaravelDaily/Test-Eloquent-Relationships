<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $teamId = Team::inRandomOrder()->firstOrFail()->id;
        $userId = User::inRandomOrder()->firstOrFail()->id;
        return [
            'team_id' => $teamId,
            'user_id' => $userId,
            'position' => $this->faker->word,
        ];
    }
}
