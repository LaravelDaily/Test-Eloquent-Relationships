<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $team_avg_size = 0;
        $count = 0;
        $countries = Country::with('teams')->get();
        foreach ($countries as $country){
            $count = count($country->teams);
            foreach ($country->teams as $team){
                $team_avg_size += $team->size;
            }
        }
        $team_avg_size = $team_avg_size / $count;


        return view('countries.index', compact('countries','team_avg_size'));
    }
}
