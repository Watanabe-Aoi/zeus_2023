<?php

namespace App\Http\Controllers;

use App\Models\BookCatalog;
use Illuminate\Http\Request;

class LendingBookController extends Controller
{
    public function index(Request $request){
        // \DB::select('select * from book_catalog');
        $book_search = $request->book_search;
        $column_name = $request->column_name;
        $book_catalog = \DB::table('book_catalog')->where($column_name, 'LIKE', $book_search)->get();
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
