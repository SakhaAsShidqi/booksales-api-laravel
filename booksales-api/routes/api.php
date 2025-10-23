<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);


Route::apiResource('genres', GenreController::class)->only(['index', 'show']);

Route::middleware(['auth:sanctum', 'is.admin'])->group(function () {

    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'destroy']);

    Route::apiResource('genres', GenreController::class)->only(['store', 'update', 'destroy']);
});

Route::fallback(function () {
    return response()->json(['status' => 'error', 'message' => 'API endpoint tidak ditemukan'], 404);
});