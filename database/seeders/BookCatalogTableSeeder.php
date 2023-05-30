<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookCatalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'book_id' => '1',
            'title' => 'プログラミング言語',
            'author' => 'まつもとゆきひろ',
            'translator' => '',
            'publisher' => 'zeus',
            'publication_date' => '2002-12-04',
            'code' => 'ISBN12-34-56',
            'status' => '保管中',
            'keyword' => 'Ruby',
            'memo' => '',
            'data_creator' => '98-76-54',
            'deta_create_date' => 20230529,
        ];
        \DB::table('book_catalog')->insert($param);
        $param = [
            'book_id' => 2,
            'title' => 'タイトル',
            'author' => 'もりつかあきとし',
            'translator' => '',
            'publisher' => 'ゼウス',
            'publication_date' => '2002-12-04',
            'code' => 'ISBN12-34-56',
            'status' => '貸出中',
            'keyword' => 'Ruby',
            'memo' => 'あいうえお',
            'data_creator' => '123456',
            'deta_create_date' => 20230523,
        ];
        \DB::table('book_catalog')->insert($param);
    }
}
