<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        DB::insert('insert into project_user (project_id, user_id, start_date) values (?, ?, ?)', [$request->project_id, Auth::id(), $request->start_date]);

        return 'Success';
    }
}
