<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flight;

class DetailFlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "flight_id" => Flight::factory(),
            "price" => $this->faker->randomFloat(2,10,150),
            "airline" => $this->faker->firstName(),
            "number_scales" => $this->faker->numberBetween(0,5),
            "duration_hours" => $this->faker->randomFloat(1,1,8)
        ];
    }
}
