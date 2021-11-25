<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::withAvg('teams', 'teams_avg_size')->get();

        return view('countries.index', compact('countries'));
    }
}
