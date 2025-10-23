<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to Book Sales API',
        'available_endpoints' => []
    ], 200);
});


Route::prefix('debug-api')->group(function () {
    require base_path('routes/api.php');
});

