<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
