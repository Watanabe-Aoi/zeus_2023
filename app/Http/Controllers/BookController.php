<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Book_Catalog;



class BookController extends Controller
{

    public function addBook(Request $request, Response $response)
    {
        $new_book=new Book_Catalog();
        
        $forms = $request->all();

        unset($forms['_token']);
        $new_book->fill($forms)->save();
        $book = Book_Catalog::all();
        return [
            'book' => $book,
        ];
    }
}
