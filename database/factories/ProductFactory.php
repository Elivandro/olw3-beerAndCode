<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'name' => fake('pt_BR')->word,
            'description' => fake('pt_BR')->paragraph(1),
            'slug' => fake('pt_BR')->slug,
            'technical_description' => fake('pt_BR')->paragraph(1)
        ];
    }
}
