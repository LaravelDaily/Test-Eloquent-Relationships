<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Team;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::withAvg('teams', 'size')->get();

        return view('countries.index', compact('countries'));
    }
}
