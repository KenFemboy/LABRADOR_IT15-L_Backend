<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminAuthController;
use App\Http\Controllers\Api\StudentAuthController;
use App\Http\Controllers\Api\AuthController;

// Public route (no auth needed)
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/student/login', [StudentAuthController::class, 'login']);




Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);