<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BeliController;

Route::get('/', function () {
    return view('welcome');
});  
Route::get('/create', function () {
    return view('tambahdata');
});
Route::get('/tambahdata', function () {
    return view('create');
});
Route::get('/create', function () {
    return view('santris');
});
Route::get('/santris', function () {
    return view('create');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/posts', [SantriController::class, 'create'])->name('posts.create');
Route::get('/posts/admin', [PostController::class, 'admin'])->name('admin');
Route::get('/posts/about', [PostController::class, 'about'])->name('about');
Route::get('/posts/shop', [PostController::class, 'shop'])->name('shop');

Route::get('/posts/beli', [PostController::class, 'beli'])->name('beli');

Route::resource('/posts', PostController::class);

Route::get('/posts/beli', [BeliController::class, 'beli']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
