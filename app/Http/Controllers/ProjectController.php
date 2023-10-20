<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        Auth::user()->projects()
            ->attach(Project::find($request->project_id), ['start_date'=>$request->start_date]);


        return 'Success';
    }
}
