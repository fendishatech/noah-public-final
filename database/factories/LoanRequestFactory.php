<?php

namespace Database\Factories;

use App\Models\Loan;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoanRequest>
 */
class LoanRequestFactory extends Factory
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

            'request_data' => fake()->sentence,

            'request_amount' => fake()->randomNumber(5),

            'request_duration' => fake()->randomNumber(2),

            'status' => fake()->randomElement(['approved', 'declined', 'pending']),

        ];
    }
}
