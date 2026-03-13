<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Public route (no auth needed)
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (auth required)
Route::middleware('auth.sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'me']);
    // Add other protected endpoints here
});
