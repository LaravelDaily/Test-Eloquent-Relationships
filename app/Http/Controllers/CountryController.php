<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\Log;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::withAvg('teams', 'size')->get();
    Log::info(json_encode($countries ));

        return view('countries.index', compact('countries'));
    }
}
