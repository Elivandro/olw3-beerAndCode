<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address' => fake('pt_BR')->streetName,
            'city' => fake('pt_BR')->city,
            'state' => fake('pt_BR')->word,
            'zipcode' => fake('pt_BR')->postcode,
            'district' => fake('pt_BR')->word,
            'number' => fake()->buildingNumber,
            'complement' => fake('pt_BR')->word
        ];
    }
}
