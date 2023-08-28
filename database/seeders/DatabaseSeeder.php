<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanRequest;
use App\Models\Lot;
use App\Models\Payment;
use App\Models\Saving;
use Database\Factories\LoanRequestFactory;
use Database\Factories\LotFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(MemberSeeder::class);
        // LoanRequest::factory()->count(10)->create();
        // Loan::factory()->count(10)->create();
        // LoanPayment::factory()->count(10)->create();
        // Lot::factory()->forMembers();
        // Saving::factory()->count(10)->create();
        Payment::factory()->count(10)->create();
    }
}
