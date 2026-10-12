<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');


    Route::resource('authors', AuthorController:: class);
    Route::resource('books', BookController:: class);
    Route::resource('genres', GenreController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
