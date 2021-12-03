<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::with('averageTeamSize as teams_avg_size')->get();

        return view('countries.index', compact('countries'));
    }
}
