<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserLoginController;

Route::get('/', function () {
    return redirect('/home');
});

// Login routes
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserLoginController::class, 'login'])->name('user.login.post');

// Logout routes for each guard
Route::post('/admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
})->name('admin.logout');

Route::post('/user/logout', [UserLoginController::class, 'logout'])->name('user.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('books', App\Http\Controllers\BookController::class);
    Route::resource('borrows', App\Http\Controllers\BorrowController::class);
    Route::resource('databorrows', App\Http\Controllers\DataBorrowController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class)->parameters(['categories' => 'category']);
});

// User routes
Route::middleware('role:user')->prefix('user')->name('user.')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});
