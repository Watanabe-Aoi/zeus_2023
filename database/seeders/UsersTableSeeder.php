<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $users = [
            [ 'name' => 'a' ],
            [ 'name' => 'b' ],
            [ 'name' => 'c' ],
        ];

        foreach($users as $user){
            \DB::table('users')->insert($user);
        }
    }
}
