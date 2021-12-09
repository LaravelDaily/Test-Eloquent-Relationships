<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        auth()->user()->projects()->attach($request->project_id, ['start_date' => $request->start_date]);

        return 'Success';
    }
}
