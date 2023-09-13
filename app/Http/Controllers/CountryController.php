<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::withAvg('teams', 'size')->get(); //this query will join the teams table and get the size column

        return view('countries.index', compact('countries'));
    }
}
