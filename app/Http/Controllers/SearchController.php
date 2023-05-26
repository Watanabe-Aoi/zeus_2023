<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookCatalog;

class SearchController extends Controller
{
    public function searchIndex(Request $request){
        $bookcatalogs = bookcatalog::all();
        return [
            'bookcatalogs' => $bookcatalogs,
        ];
    }
}
