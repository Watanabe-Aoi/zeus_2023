<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Books;



class BookController extends Controller
{
    public function confirmBook(Request $request){
        $request
    }
 
    public function addBook(Request $request, Response $response)
    {
        $new_book=new Book();
        $forms = $request->all();
        unset($forms['_token']);
        $new_book->fill($forms)->save();
        $book = Book::all();
        return [
            'book' => $book,
        ];
    }
   
}
