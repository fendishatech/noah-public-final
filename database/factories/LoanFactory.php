<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
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
            'amount' => fake()->randomFloat(2, 1000, 10000),
            'interest_rate' => fake()->randomFloat(2, 5, 15),
            'term_months' => fake()->randomNumber(2),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'status' => fake()->randomElement(['active', 'closed', 'failed']),
            'next_payment_due' => fake()->date(),
            'last_payment_date' => fake()->date(),
            'remark' => fake()->sentence,
        ];
    }
}
