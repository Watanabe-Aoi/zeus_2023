<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendingBookController extends Controller
{
    public function index(Reqest $request){
        $bookcatalog = book_catalog::all();
        return [
            'bookcatalog' => $bookcatalog
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
