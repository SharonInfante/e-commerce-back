<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shopping>
 */
class ShoppingFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::factory()->create();

        return [
            'product_id' => $product->id,
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->randomNumber(5)/100,
        ];
    }
}
