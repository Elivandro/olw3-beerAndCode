<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sku;

class OrderSkuFactory extends Factory
{
    public function definition(): array
    {
        $sku = Sku::with('product')->inRandomOrder()->first();
        
        return [
            'sku_id' => $sku->id,
            'product' => $sku->toJson(),
            'quantity' => fake()->randomDigitNot(0),
            'unitary_price' => $sku->price
        ];
    }
}
