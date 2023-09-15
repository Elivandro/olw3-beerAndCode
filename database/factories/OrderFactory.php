<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Enums\OrderStatusEnum;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'session_id' => Str::uuid(),
            'total' => fake()->randomFloat(2, 0, 9000),
            'status' => fake()->randomElement([OrderStatusEnum::CART, OrderStatusEnum::PAID, OrderStatusEnum::PENDING, OrderStatusEnum::CANCELED])
        ];
    }
}
