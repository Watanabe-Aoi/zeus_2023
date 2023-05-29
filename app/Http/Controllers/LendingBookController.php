<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book_catalog;

class LendingBookController extends Controller
{
    public function index(Request $request){
        return [
            'book_catalog' => $book_catalog = \DB::select('select * from book_catalog'),
        ];
    }

    public function returnBook(){

        \DB::table('bookcatalog')->where('id',$bookid)->update(['status' => true]);
        $bookcatalog = bookcatalog::all();
        return [
            'bookcatalog' => $bookcatalog
        ];

    }

}
