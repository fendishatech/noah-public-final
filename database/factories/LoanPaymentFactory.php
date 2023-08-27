<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoanPayment>
 */
class LoanPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'loan_id' => fn () => Loan::inRandomOrder()->first()->id,
            'payment_date' => fake()->date(),
            'amount' => fake()->randomFloat(2, 100, 1000),
        ];
    }
}
