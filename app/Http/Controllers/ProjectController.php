<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
		auth()->user()->projects()->sync([
            /* 'project_id' => $request->project_id,
            'start_date' => $request->start_date */
			$request->project_id => ['start_date' => $request->start_date]
        ]);
        return 'Success';
    }
}
