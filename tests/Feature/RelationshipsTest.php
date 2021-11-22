<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Role;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RelationshipsTest extends TestCase
{
    use RefreshDatabase;

    // TASK: find out why this relationship fails, and fix it in Eloquent Model
    public function test_user_create_task()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/tasks', [
            'name' => 'Some task'
        ]);
        $response->assertStatus(200);
    }

    // TASK: this table throws an error, fix it
    public function test_task_with_no_user()
    {
        Task::create(['name' => 'Some task']);

        $response = $this->get('/tasks');
        $response->assertStatus(200);
    }

    // TASK: define the two-level relationship in the User model
    public function test_show_users_comments()
    {
        $user = User::factory()->create();
        $task = Task::create([
            'users_id' => $user->id,
            'name' => 'Some task'
        ]);
        Comment::create([
            'task_id' => $task->id,
            'name' => 'Some name',
            'comment' => 'Some comment'
        ]);

        $response = $this->get('/users/' . $user->id);
        $response->assertStatus(200);
    }

    // TASK: pivot table name in the list
    public function test_show_roles_with_users()
    {
        $user = User::factory()->create();
        $role = Role::create(['name' => 'Admin']);
        DB::table('users_roles')->insert([
            'role_id' => $role->id,
            'user_id' => $user->id
        ]);

        $response = $this->get('/roles');
        $response->assertStatus(200);
    }
}
