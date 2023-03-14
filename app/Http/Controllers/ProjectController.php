<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        $user = User::find(Auth::id());
        $user->projects()->syncWithPivotValues([$request->get('project_id')], [
            'start_date' => $request->get('start_date')
        ]);
        return 'Success';
    }
}
