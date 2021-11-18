<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->text(50),
            "destination" => $this->faker->country(),
            "origin" => $this->faker->country(),
            "arrival_date" => now(),
            "departure_date" => $this->faker->dateTime('now')
        ];
    }
}
