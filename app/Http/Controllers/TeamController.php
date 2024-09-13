<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('users','name','email')->get();

        return view('teams.index', compact('teams'));
    }
}
