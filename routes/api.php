<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminAuthController;
use App\Http\Controllers\Api\StudentAuthController;

// Public route (no auth needed)
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/student/login', [StudentAuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/admin/logout', [AdminAuthController::class, 'logout']);
    Route::post('/student/logout', [StudentAuthController::class, 'logout']);

});