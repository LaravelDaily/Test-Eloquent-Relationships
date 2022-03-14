<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        //Authorized user and its relationship with projects is called. Attach is used to insert values in related many-to-many models
        auth()->user()->projects()->attach($request->project_id, ['start_date' => $request->start_date]);
        return 'Success';
    }
}
