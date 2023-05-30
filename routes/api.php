<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookCOntroller;

use App\Http\Controllers\UserController;

use App\Http\Controllers\LendingBookController;

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

Route::get('/book_catalog', [LendingBookController::class, 'index']);
Route::post('/book_catalog', [LendingBookController::class, 'deleteBook']);
Route::post('/return', [LendingBookController::class, 'returnBook']);

Route::get('/bookcatalog',[LendingBookController::class, 'index']);
route::post('/insertBook',[BookController::class, 'addBook']);
Route::post('/tryLogin', [UserController::class, 'authenticate']);
