<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'code' => $this->faker->numerify('DH###'),
            'fullname' => $this->faker->name,
            'phone' => $this->faker->tollFreePhoneNumber,
            'status' => $this->faker->numberBetween($min=0, $max=4),
            'total' => $this->faker->numberBetween($min = 10000, $max = 1000000),
        ];
    }
}
