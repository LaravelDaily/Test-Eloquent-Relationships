<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Database\Eloquent\Builder;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::withAvg('teams', 'size')->get();

        return view('countries.index', compact('countries'));
    }
}
