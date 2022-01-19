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

        $project = Project::findOrFail($request->project_id);
        $project->users()->syncWithPivotValues([auth()->id()], ['start_date' => $request->start_date]);

        return 'Success';
    }
}
