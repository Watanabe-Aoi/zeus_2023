<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
<<<<<<< HEAD

use App\Http\Controllers\LendingBookController;
=======
use App\Http\Controllers\BookController;

use App\Http\Controllers\LendingBookController;
use App\Http\Controllers\UserController;
>>>>>>> bbb0b3466b89154526f212ce598142505b464a41

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

// Route::get('/book_catalog', [LendingBookController::class], 'index');
Route::post('/book_catalog', [LendingBookController::class, 'index']);
// Route::post('/book_catalog', [LendingBookController::class, 'deleteBook']);
=======
Route::get('/book_catalog', [LendingBookController::class, 'index']);
Route::post('/book_catalog', [LendingBookController::class, 'deleteBook']);
>>>>>>> bbb0b3466b89154526f212ce598142505b464a41
Route::post('/return', [LendingBookController::class, 'returnBook']);

route::post('/insertBook',[BookController::class, 'addBook']);
Route::get('/bookcatalog',[LendingBookController::class, 'index']);
route::post('/book_catalog/insertBook',[BookController::class, 'addBook']);
Route::post('/tryLogin', [UserController::class, 'authenticate']);
<<<<<<< HEAD

Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);


Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);

=======
Route::get('/search',[SearchController::class, 'searchIndex']);

Route::get('/search',[SearchController::class, 'searchIndex']);

>>>>>>> bbb0b3466b89154526f212ce598142505b464a41
