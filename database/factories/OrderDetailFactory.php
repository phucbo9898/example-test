<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_product' => Product::factory()->create()->name,
            'image' => $this->faker->imageUrl($width = 400, $height = 500, 'cats'),
            'order_id' => $this->faker->numberBetween($min =1, $max = 20),
            'product_id' => $this->faker->numberBetween($min =1, $max = 51),
            'price' => Product::factory()->create()->price,
            'quantity' => $this->faker->numberBetween($min =0, $max =20),

        ];
    }
}
