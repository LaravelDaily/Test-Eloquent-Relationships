<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $taskId = Task::inRandomOrder()->firstOrFail()->id;
        return [
            'name' => $this->faker->word,
            'comment' => $this->faker->sentence,
            'task_id' => $taskId,
        ];
    }
}
