<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        DB::table('project_user')->insert([
            'project_id' => $request->project_id,
            'start_date' => $request->start_date,
            'user_id' => auth()->user()->id,
        ]);

        return 'Success';
    }
}
