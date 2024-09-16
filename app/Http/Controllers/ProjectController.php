<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectUser;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        ProjectUser::create([
            'project_id' => $request->project_id,
            'user_id'    => Auth::id(),
            'start_date' => $request->start_date,
        ]);

        return 'Success';
    }
}
