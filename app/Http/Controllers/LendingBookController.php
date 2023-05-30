<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class LendingBookController extends Controller
{
    public function index(Request $request){
        $book_catalog = \DB::table('book_catalog')->where('status', 'LIKE', $request->book_search);
        return [
            'book_catalog' => $book_catalog
        ];
    }

    public function deleteBook(Request $request){
        \DB::table('book_catalog')->where('book_id',$request->book_id)->delete();
        $book_catalog = \DB::select('select * from book_catalog');
        return[
            'book_catalog' => $book_catalog,
        ];
           
    }

    public function returnBook(Request $request){

        \DB::table('book_catalog')->where('id',$bookid)->update(['status' => true]);
        $book_catalog = book_catalog::all();
        return [
            'bookcatalog' => $bookcatalog
        ];

    }

}
