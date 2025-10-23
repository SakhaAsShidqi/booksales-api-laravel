<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::middleware('api')->group(function () {
    // Books
    Route::get('books', [BookController::class, 'index']);
    Route::get('books/{book}', [BookController::class, 'show']);

    // Authors
    Route::get('authors', [AuthorController::class, 'index']);
    Route::post('authors', [AuthorController::class, 'store']);

    // Genres
    Route::get('genres', [GenreController::class, 'index']);
    Route::post('genres', [GenreController::class, 'store']);

    // Sales
    Route::get('sales', [SaleController::class, 'index']);
    Route::get('sales/{sale}', [SaleController::class, 'show']);
    Route::post('sales', [SaleController::class, 'store']);
});

// fallback
Route::fallback(function () {
    return response()->json(['status'=>'error','message'=>'API endpoint tidak ditemukan'], 404);
});