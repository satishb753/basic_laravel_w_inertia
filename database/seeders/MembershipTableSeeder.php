<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $daysToAdd = array( "a"=>30, "b"=>120, "c"=>180, "d"=>365, "e"=>365*2, "f"=>365*5, "g"=>365*60);

        \DB::table('memberships')->insert(array(
            0 => 
                array(
                    'user_id' => rand(1,100),
                    'membership_id' => rand(1,3),
                    'start_date' => now(),
                    'end_date' => now()->addDays($daysToAdd[array_rand($daysToAdd)]),
                    'created_at' => now(),
                    'updated_at' => null,
                ),
            1 => 
                array(
                    'user_id' => rand(1,100),
                    'membership_id' => rand(1,3),
                    'start_date' => now(),
                    'end_date' => now()->addDays($daysToAdd[array_rand($daysToAdd)]),
                    'created_at' => now(),
                    'updated_at' => null,
                ),
            2 => 
                array(
                    'user_id' => rand(1,100),
                    'membership_id' => rand(1,3),
                    'start_date' => now(),
                    'end_date' => now()->addDays($daysToAdd[array_rand($daysToAdd)]),
                    'created_at' => now(),
                    'updated_at' => null,
                ),
        ));
    }
}
