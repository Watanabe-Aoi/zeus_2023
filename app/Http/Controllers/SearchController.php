<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\BookCatalog;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchIndex(Request $request){
        //dd("hello");
      // dd( DB::select('select * from book_catalog'));

         $bookcatalogs = DB::select('select * from book_catalog');
        //dd($bookcatalogs);
        return [
            'bookcatalogs' => $bookcatalogs,
        ];
    }

    public function index(Request $request){
        //dd("hello");
        $users = user::all();
        dd($users);
    }
}
