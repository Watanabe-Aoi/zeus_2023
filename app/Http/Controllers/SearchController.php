<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\BookCatalog;

class SearchController extends Controller
{
    public function searchIndex(Request $request){
        $bookcatalogs = BookCatalog::all();
        dd($bookcatalogs);
        return [
            'bookcatalogs' => $bookcatalogs,
        ];
    }
}
