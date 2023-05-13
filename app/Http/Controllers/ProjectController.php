<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        $project = new Project();
        $project->project_id = $request->project_id;
        $project->users_id = auth()->user()->id;
        $project->start_date = $request->start_date;
        $project->save();

        return 'Success';
    }
}
