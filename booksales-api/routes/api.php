<?php
// ... (use statements lainnya)
use App\Http\Controllers\SaleController;

Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::apiResource('sales', SaleController::class)
        ->only(['store', 'update', 'show']); 

    Route::middleware(['is.admin'])->group(function () {

        Route::apiResource('sales', SaleController::class)
            ->only(['index', 'destroy']); 
    });
    
});
