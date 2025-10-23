<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SaleController;

Route::middleware('api')->group(function () {
    // Books
    Route::get('books', [BookController::class, 'index']);
    Route::get('books/{book}', [BookController::class, 'show']);

    // Authors (gunakan apiResource)
    Route::apiResource('authors', AuthorController::class);

    // Genres (gunakan apiResource)
    Route::apiResource('genres', GenreController::class);

    // Sales
    Route::get('sales', [SaleController::class, 'index']);
    Route::get('sales/{sale}', [SaleController::class, 'show']);
    Route::post('sales', [SaleController::class, 'store']);
});

// fallback
Route::fallback(function () {
    return response()->json(['status'=>'error','message'=>'API endpoint tidak ditemukan'], 404);
});