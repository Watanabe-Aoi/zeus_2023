<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\SearchController;
=======
use App\Http\Controllers\BookCOntroller;

use App\Http\Controllers\UserController;
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);
=======
Route::get('/bookcatalog',[LendingBookController::class, 'index']);
route::post('/insertBook',[BookController::class, 'addBook']);
Route::post('/tryLogin', [UserController::class, 'authenticate']);
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
