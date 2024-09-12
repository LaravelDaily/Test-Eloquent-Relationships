<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Task;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::wherehas('projects')->get();
        
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function test()
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
        
        return $user->comments;
    }
}
