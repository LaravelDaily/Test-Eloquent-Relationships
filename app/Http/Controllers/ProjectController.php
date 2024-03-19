<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        $user->projects()->attach($request->project_id, ['start_date' => $request->start_date]);

        return 'Success';
    }
}
