<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Team;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::with('teams')->all();

        return view('countries.index', compact('countries'));
    }
}
