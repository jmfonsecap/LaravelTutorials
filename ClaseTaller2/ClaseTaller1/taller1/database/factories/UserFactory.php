<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => $this->faker->company,

            'price' => $this->faker->numberBetween($min = 200, $max = 9000),

        ];
    }
}
