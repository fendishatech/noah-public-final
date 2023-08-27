<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),

            'father_name' => fake()->lastName(),

            'last_name' => fake()->lastName(),

            'title' => fake()->title(),

            'gender' => fake()->randomElement(['male', 'female']),

            'dob' => fake()->dateTimeBetween('-50 years', '-18 years'),

            'martial_status' => fake()->randomElement(['single', 'married', 'divorced', 'widow']),

            'family_no' => fake()->numberBetween(2, 10),

            'family_males' => fake()->numberBetween(1, 5),

            'family_females' => fake()->numberBetween(1, 5),

            'phone_no' => fake()->phoneNumber(),

            'email' => fake()->safeEmail(),

            'will_list' => fake()->name() . ', ' . fake()->name(),

            'password' => bcrypt('password'),

        ];
    }
}
