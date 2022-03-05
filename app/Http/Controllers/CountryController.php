<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::withAvg('teams','size')->get();

        /*
         * i have done this without reading documentations and had no idea how to
         * do that correctly , and it works :)
         */
//        foreach ($countries as $country) {
//            $avgSize=0;
//            $count = count($country->teams);
//            foreach ($country->teams as $team) {
//                $avgSize += $team->size;
//            }
//            $avgSize = $avgSize / $count;
//            $country['teams_avg_size'] = $avgSize;
//        }

        return view('countries.index', compact('countries'));
    }
}
