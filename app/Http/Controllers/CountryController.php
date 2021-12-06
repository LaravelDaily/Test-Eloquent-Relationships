<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::withAvg('teams','size')->get();
        // ($countries->first()->teams_avg_size = 4);
        return view('countries.index', compact('countries'));
    }
}
