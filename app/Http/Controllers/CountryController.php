<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller {
    // app/Http/Controllers/CountryController.php
    public function index() {
        // TASK: load the relationship average of team size
        $countries = Country::with('teams')->get();
        $countries = $countries->map(function ($country) {
            $country->teams_avg_size = $country->teams->avg('size');

            return $country;
        });

        return view('countries.index', compact('countries'));
    }
}
