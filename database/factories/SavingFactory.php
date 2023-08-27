<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saving>
 */
class SavingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_id' => fn () => Member::inRandomOrder()->first()->id,

            'account_number' => fake()->unique()->numberBetween(1000000000, 9999999999),

            'account_type' => fake()->randomElement(['regular', 'special']),

            'interest_rate' => fake()->randomFloat(2, 5, 15),

            'balance' => fake()->randomFloat(2, 1000, 1000000),
        ];
    }
}
