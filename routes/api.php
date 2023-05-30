<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
<<<<<<< HEAD

use App\Http\Controllers\LendingBookController;
=======
>>>>>>> 05890995415a8dca1381f5bcafd86b0f32ba1212

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
<<<<<<< HEAD
Route::get('/book_catalog', [LendingBookController::class, 'index']);
Route::post('/book_catalog', [LendingBookController::class, 'deleteBook']);
Route::post('/return', [LendingBookController::class, 'returnBook']);

route::post('/insertBook',[BookController::class, 'addBook']);
Route::post('/tryLogin', [UserController::class, 'authenticate']);
=======
Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);
>>>>>>> 05890995415a8dca1381f5bcafd86b0f32ba1212
=======
Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);
>>>>>>> 05890995415a8dca1381f5bcafd86b0f32ba1212
