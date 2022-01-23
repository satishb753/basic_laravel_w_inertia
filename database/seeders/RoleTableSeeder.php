<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(array(
            0 => 
                array(
                    'id' => 1,
                    'role_id' => 42,
                    'title' => 'admin'
                ),
            1 =>
                array(
                    'id' => 2,
                    'role_id' => 7,
                    'title' => 'manager'
                ),
            2 =>
                array(
                    'id' => 3,
                    'role_id' => 5,
                    'title' => 'developer'
                ),
            3 =>
                array(
                    'id' => 4,
                    'role_id' => 3,
                    'title' => 'vendor'
            ),
            3 =>
                array(
                    'id' => 5,
                    'role_id' => 1,
                    'title' => 'customer'
            ),
            
        ));
    }
}
