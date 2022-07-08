<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Role;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\UserRole;
use App\Models\Task;
use App\Models\User;
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
        Country::factory(5)->create();
        User::factory(10)->create()->each(function ($user) {
            Task::factory(3)->create(['users_id' => $user->id])->each(function ($task) {
                Comment::factory(3)->create(['task_id' => $task->id]);
            });
            Role::factory()->create()->each(function ($role) use ($user) {
                UserRole::factory()->create(['role_id' => $role->id, 'user_id' => $user->id]);
            });
            Team::factory()->create()->each(function ($team) use ($user) {
                TeamUser::factory()->create(['team_id' => $team->id, 'user_id' => $user->id]);
            });
        });
        Attachment::factory(50)->create();
    }
}
