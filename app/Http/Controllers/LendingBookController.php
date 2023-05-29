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

    public function deleteBook(Request $request){
        // \DB::table('book_catalog')->where('id',$request->all())
        return[
            'book_catalog' => $book_catalog = $request->all(),
        ];
    }

    public function returnBook(){

        \DB::table('book_catalog')->where('id',$bookid)->update(['status' => true]);
        $book_catalog = book_catalog::all();
        return [
            'bookcatalog' => $bookcatalog
        ];

    }

}
