<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
