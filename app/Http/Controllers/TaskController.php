<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('users')->paginate();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // TASK: find out why this sentence fails, and fix it in Eloquent Model
        auth()->user()->tasks()->create([
            'name' => $request->name
        ]);

        return 'Success';
    }
}
