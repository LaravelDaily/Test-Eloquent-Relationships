<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->paginate();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        auth()->user()->tasks()->create([
            'name' => $request->name
        ]);

        return 'Success';
    }
}
