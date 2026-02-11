<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('books.index'); 
Route::post('/books/{book}/favorite', [BookController::class, 'favorite'])->name('books.favorite');
Route::resource('books', BookController::class);
