<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::all();

        foreach ($countries as $country) {
            $totalSize = 0;
            $teamCount = 0;

            foreach ($country->teams as $team) {
                $totalSize += $team->size;
                $teamCount++;
            }

            $country->teams_avg_size = $teamCount > 0 ? $totalSize / $teamCount : 0;
        }

        return view('countries.index', compact('countries'));
    }
}
