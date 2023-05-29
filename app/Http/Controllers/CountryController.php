<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Team;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::all();
        foreach ($countries as $country){
            $teams = Team::where('country_id', $country->id)->get();
            $sum = 0;
            $count = 0;
            foreach($teams as $team){
                $sum += $team->size;
                $count += 1;
            }
            $country->teams_avg_size = $sum/$count;
        }


        return view('countries.index', compact('countries'));
    }
}
