<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// API Routes
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Fallback route
Route::fallback(function () {
    return response()->json([
        'status' => 'error',
        'message' => 'Route tidak ditemukan'
    ], 404);
});