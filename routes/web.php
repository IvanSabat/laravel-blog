<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::resource('posts', PostController::class)->except(['show']);
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
