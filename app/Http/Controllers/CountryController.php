<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::find(1)->teams;
        $total_ave_size = $countries->sum('size')/$countries->count();
        foreach($countries as $country) {
            $country['teams_avg_size'] = $total_ave_size;
        }

        return view('countries.index', compact('countries'));
    }
}
