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
        
        $book = Book::all();
        return [
            'book' => $book,
        ];
    }
    public function index(Request $request){
        $book_search = $request->book_search;
        $column_name = $request->column_name;
        $book_catalog = Book::all()->where($column_name, 'LIKE', $book_search);
        return [
            'book_catalog' => $book_catalog
        ];
    }
    public function deleteBook(Request $request){
        Book::all()->where('book_id',$request->book_id)->delete();
        $book_catalog = Book::all();
        return[
            'book_catalog' => $book_catalog,
        ];    
    }
    public function returnOrBorrowBook(Request $request){
        $column_name = $request->column_name;
        $book_search = $request->book_search;
        if($book_search === '貸出中'){
            Book::all()->where($column_name, $book_search)->update(['status' => '保管中']);
        }elseif($book_search !== '保管中'){
            Book::all()->where($column_name, $book_search)->update(['status' => '貸出中']);
        }
        $book_catalog = Book::all();
        return [
            'book_catalog' => $book_catalog
        ];
    }
}