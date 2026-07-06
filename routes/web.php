<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

// Health check endpoint for Docker healthcheck and monitoring
Route::get('/health', function () {
    return response()->json([
        'status' => 'error',
        'timestamp' => now()->toISOString(),
        'version' => '1.0.0'
    ]);
});