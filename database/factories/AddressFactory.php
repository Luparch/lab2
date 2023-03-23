<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'denotation' => fake()->word(),
            'city' => fake()->city(),
            'street' => fake()->streetName(),
            'house' => fake()->randomNumber(2),
            'floor' => fake()->randomNumber(2),
            'flat' => fake()->randomNumber(3),
            'intercom' => fake()->randomNumber(4),
            'customer_id' => Customer::factory()
        ];
    }
}
