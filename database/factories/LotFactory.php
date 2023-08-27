<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lot>
 */
class LotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function forMembers()
    {
        $memberIds = Member::pluck('id');

        foreach ($memberIds as $id) {
            $this->create([
                'member_id' => $id,
                'promised' => fake()->randomNumber(2),
                'total' => fake()->randomNumber(2),
                'unit_per_birr' => 1000,
            ]);
        }
    }
}
