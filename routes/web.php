<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
//menambahkan route kategoris
Route::resource('categories', App\Http\Controllers\KategoriController::class)->parameters(['categories' => 'kategori']);

//menambahkan route books
Route::resource('books', App\Http\Controllers\BookController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//menambahkan route borrows
Route::resource('borrows', App\Http\Controllers\BorrowController::class);