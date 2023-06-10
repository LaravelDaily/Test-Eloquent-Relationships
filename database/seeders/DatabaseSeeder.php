<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)
            ->has(
                \App\Models\Task::factory(2)
                    ->has(
                        \App\Models\Comment::factory(5)
                    )
            )
            ->create();
    }
}
