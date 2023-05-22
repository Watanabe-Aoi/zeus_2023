<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
use App\Http\Middleware\GreetMiddleware;

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

// home -> login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');

// -- 練習用 --
// hello
Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello')
    ->middleware(HelloMiddleware::class);
Route::post('/greet', [App\Http\Controllers\HelloController::class, 'greet'])->name('greet')
    ->middleware(GreetMiddleware::class);

// Practice1
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'post'])->name('register');    // form値の取得＋送信
    /* post通信を受け取る */

Route::get('/search', [App\Http\Controllers\HelloController::class, 'search'])->name('search');

// DB
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::post('/insert', [App\Http\Controllers\ProductsController::class, 'add'])->name('insert');
Route::get('/products/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('edit');
Route::post('/products/update', [App\Http\Controllers\ProductsController::class, 'update'])->name('update');
Route::post('/products/delete', [App\Http\Controllers\ProductsController::class, 'delete'])->name('delete');
