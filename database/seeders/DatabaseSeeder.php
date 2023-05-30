<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        //$this->call(OrdersTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(BookCatalogTestSeeder::class);
=======
        // $this->call(OrdersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(BookCatalogTableSeeder::class);
        $this->call(UserTableSeeder::class);
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
    }
}
