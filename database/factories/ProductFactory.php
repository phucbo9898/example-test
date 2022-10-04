<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'image' => $this->faker->imageUrl($width = 400, $height = 500, 'cats'),
            'category_id' => $this->faker->numberBetween($min =1, $max =5),
            'price' => $this->faker->numberBetween($min = 10000, $max = 1000000),
            'status'=>$this->faker->numberBetween($min = 0, $max = 1),
            'quantity' => $this->faker->numberBetween($min =0, $max =20),
        ];
    }
}
