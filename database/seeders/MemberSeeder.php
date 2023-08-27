<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Member::create([
        //     'first_name' => 'Kidus',
        //     'father_name' => 'taye',
        //     'last_name' => 'Tsige',
        //     'title' => 'Mr.',
        //     'gender' => 'male',
        //     'dob' => '1996-01-01 00:00:00',
        //     'martial_status' => 'single',
        //     'family_no' => 5,
        //     'family_males' => 3,
        //     'family_females' => 2,
        //     'phone_no' => '0913974307',
        //     'email' => 'john@email.com',
        //     'will_list' => 'relative one, relative two',
        //     'password' => Hash::make('password')
        // ]);
        Member::create([
            'first_name' => 'Jane',
            'father_name' => 'Doe',
            'last_name' => 'Doe',
            'title' => 'Ms.',
            'gender' => 'female',
            'dob' => '1992-03-24 00:00:00',
            'martial_status' => 'married',
            'family_no' => 4,
            'family_males' => 2,
            'family_females' => 2,
            'phone_no' => '0912543298',
            'email' => 'jane@email.com',
            'will_list' => 'John Doe, Mary Doe',
            'password' => Hash::make('password123')
        ]);

        Member::create([
            'first_name' => 'David',
            'father_name' => 'Steve',
            'last_name' => 'Jones',
            'title' => 'Mr.',
            'gender' => 'male',
            'dob' => '1988-05-11 00:00:00',
            'martial_status' => 'single',
            'family_no' => 3,
            'family_males' => 1,
            'family_females' => 2,
            'phone_no' => '0911222333',
            'email' => 'david@email.com',
            'will_list' => ' Amanda Jones, Olivia Jones',
            'password' => Hash::make('password456')
        ]);


        Member::create([
            'first_name' => 'Maria',
            'father_name' => 'Lopez',
            'last_name' => 'Lopez',
            'title' => 'Ms.',
            'gender' => 'female',
            'dob' => '2000-11-12 00:00:00',
            'martial_status' => 'single',
            'family_no' => 4,
            'family_males' => 2,
            'family_females' => 2,
            'phone_no' => '0912333444',
            'email' => 'maria@email.com',
            'will_list' => 'Juan Lopez, Gabriela Lopez',
            'password' => Hash::make('password789')
        ]);

        Member::create([
            'first_name' => 'John',
            'father_name' => 'Smith',
            'last_name' => 'Smith',
            'title' => 'Mr.',
            'gender' => 'male',
            'dob' => '1985-07-22 00:00:00',
            'martial_status' => 'married',
            'family_no' => 3,
            'family_males' => 1,
            'family_females' => 2,
            'phone_no' => '0918882222',
            'email' => 'john@email.com',
            'will_list' => 'Emily Smith, Sara Smith',
            'password' => Hash::make('password101112')
        ]);

        Member::create([
            'first_name' => 'Emma',
            'father_name' => 'Watson',
            'last_name' => 'Watson',
            'title' => 'Ms.',
            'gender' => 'female',
            'dob' => '1997-04-02 00:00:00',
            'martial_status' => 'single',
            'family_no' => 2,
            'family_males' => 1,
            'family_females' => 1,
            'phone_no' => '0914440555',
            'email' => 'emma@email.com',
            'will_list' => 'Harry Watson',
            'password' => Hash::make('password131415')
        ]);
    }
}
