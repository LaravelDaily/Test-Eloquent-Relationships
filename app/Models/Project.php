<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();

        // Assuming 'project_user' is the name of the pivot table
        $user->projects()->attach($request->project_id, ['start_date' => $request->start_date]);

        return 'Project added successfully';
    }
}
