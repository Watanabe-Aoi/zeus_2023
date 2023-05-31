<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Book;



class BookController extends Controller
{

    public function addBook(Request $request, Response $response)
    {
        $new_book=new Book();
        
        $forms = $request->all();
        unset($forms['_token']);
        $new_book->fill($forms)->save();
        
        // $book = Book::all();
        $book = Book::where('code', $request->code)->first();
        return [
            'book' => $book,
        ];
    }
}