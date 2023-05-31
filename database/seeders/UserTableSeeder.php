<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'user_id' => 'test_user',
            'password' => 'pass',
        ]);

        
        \DB::table('users')->insert([
            'user_id' => 'admin',
            'password' => 'adminpass',
        ]);
    }
}
