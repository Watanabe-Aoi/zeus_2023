<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Laravel welcomeページ
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('{any?}', function () {
    return view('welcome');
  })->where('any', '.*')->name('welcome');