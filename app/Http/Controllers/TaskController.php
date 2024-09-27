<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->paginate();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // TASK: find out why this sentence fails, and fix it in Eloquent Model
        $task = Task::find(auth()->id)->tasks();
        $task->attach($request->name);

        return 'Success';
    }
}
