<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MembershipTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('membership_types')->insert(array(
            0 => 
                array(
                    'id' => 1,
                    'type' => 'Free',
                    'monthly_amount' => 0.00,
                    'quarterly_amount' => 0.00,
                    'semi_annually_amount' => 0.00,
                    'annually_amount' => 0.00,
                    'two_year_amount' => 0.00,
                    'five_year_amount' => 0.00,
                    'lifetime_amount' => 0.00,
                    'created_at' => now(),
                    'updated_at' => null,
                ),
            1 => 
                array(
                    'id' => 2,
                    'type' => 'Pro',
                    'monthly_amount' => 2.50,
                    'quarterly_amount' => 2.25*4,
                    'semi_annually_amount' => 2.00*6,
                    'annually_amount' => 1.50*12,
                    'two_year_amount' => 1.00*24,
                    'five_year_amount' => 0.60*60,
                    'lifetime_amount' => 1000.00,
                    'created_at' => now(),
                    'updated_at' => null,
                ),
            2 => 
                array(
                    'id' => 3,
                    'type' => 'Prime',
                    'monthly_amount' => 3.50,
                    'quarterly_amount' => 3.25*4,
                    'semi_annually_amount' => 2.50*6,
                    'annually_amount' => 2.00*12,
                    'two_year_amount' => 1.50*24,
                    'five_year_amount' => 1.00*60,
                    'lifetime_amount' => 1500.00,
                    'created_at' => now(),
                    'updated_at' => null,
                ),
        ));
    }
}
