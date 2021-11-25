<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::whereHas('teams', function($q) {
            $q->av('size', 4);
        })->get();

        return view('countries.index', compact('countries'));
    }
}
