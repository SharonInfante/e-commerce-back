<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;
Use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     use HasFactory;
     
    public function definition(): array
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        return [
            'user_id' => $user->id,
            'product_id' => $product->id,
            'province' => $this->faker->cityPrefix(),
            'street' => $this->faker->streetSuffix(),
            'zip_code' => $this->faker->numerify(),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal']),
        ];
    }
}
