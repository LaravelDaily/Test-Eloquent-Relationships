<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Team;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            $countries = Country::factory()->count(100)->create();

            $countries->each(function (Country $country){
                $teams = Team::factory()->count(random_int(1,10))->make();
                $country->teams()->saveMany($teams);
            });
            DB::commit();
        } catch (Exception $exception){
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}
