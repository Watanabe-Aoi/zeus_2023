<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookCatalog;

class BookCatalogTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        BookCatalog::create([
            'book_id' => 1,
            'title' => 'テスト',
            'author' => 'aaa',
            'translator' => 'bbb',
            'publication_date' => 1111-11-11,
            'deta_create_date' => 2222-22-22,
        ]);
    }
}
