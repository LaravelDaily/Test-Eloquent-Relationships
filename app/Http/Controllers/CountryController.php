<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
<<<<<<< HEAD
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
=======
        $countries = Country::all();
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138

        return view('countries.index', compact('countries'));
    }
}
