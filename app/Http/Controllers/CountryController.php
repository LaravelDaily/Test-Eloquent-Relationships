<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        //$countries = Country::all();
        $countries = Country::with(['teams' => function ($query) {
            $query->selectRaw('country_id, AVG(size) as teams_avg_size')
                  ->groupBy('country_id');
        }])->get();
        Log::info($countries);
        return view('countries.index', compact('countries'));
    }
}
