<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $countryId = Country::inRandomOrder()->firstOrFail()->id;
        return [
            'name' => $this->faker->word,
            'size' => $this->faker->randomDigit(),
            'country_id' => $countryId,
        ];
    }
}
