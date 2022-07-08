<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\Relation;

class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $attachable = $this->faker->randomElement([
            Task::class,
            Comment::class,
        ]);
        return [
            'filename' => $this->faker->filePath(),
            'attachable_type' => $attachable,
            'attachable_id' => $attachable::inRandomOrder()->first()->id,
        ];
    }
}
