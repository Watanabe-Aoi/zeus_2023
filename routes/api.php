<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\UserController;

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
Route::post('/tryLogin', [UserController::class, 'authenticate']);
=======
Route::get('/search',[SearchController::class, 'searchIndex']);

//Route::get('/search',[SearchController::class, 'index']);
>>>>>>> 9cb270fb4ff8c2d9a1eb04eca99ee24b451c672c
