<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter

        $user=auth()->user();
        $user->projects()->find($request->project_id)->pivot->start_date=$request->start_date;

        $user->push();

        

        return 'Success';
    }
}
