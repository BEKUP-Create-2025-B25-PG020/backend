<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Middleware\ValidateApiKey;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware(ValidateApiKey::class)->group(function () {

    // ===========================
    // FOOD ENDPOINTS
    // ===========================
    Route::controller(FoodController::class)->group(function () {
        // Featured foods for home screen
        Route::get('/foods/featured', 'featured');

        // Search foods
        Route::get('/foods/search', 'search');

        // Get all foods with filters
        Route::get('/foods', 'index');

        // Food detail
        Route::get('/foods/{id}', 'show');

        // Food galleries
        Route::get('/foods/{id}/galleries', 'galleries');

        // Like food
        Route::post('/foods/{id}/like', 'like');
    });

    // ===========================
    // REGION ENDPOINTS
    // ===========================
    Route::controller(RegionController::class)->group(function () {
        Route::get('/regions', 'index');
    });

    // ===========================
    // CATEGORY ENDPOINTS
    // ===========================
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categories', 'index');
    });
});

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'success' => true,
        'message' => 'API is running',
        'version' => '1.0.0',
        'timestamp' => now()->toIso8601String()
    ]);
});
