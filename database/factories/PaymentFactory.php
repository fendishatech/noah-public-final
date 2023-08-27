<?php

namespace Database\Factories;

use App\Models\Saving;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => fn () => Saving::inRandomOrder()->first()->id,

            'payment_date' => fake()->date(),

            'amount' => fake()->randomFloat(2, 100, 5000),

            'payment_type' => fake()->randomElement(['deposit', 'interest']),

        ];
    }
}
