<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminAuthController;
use App\Http\Controllers\Api\StudentAuthController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;




// Public route (no auth needed)
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/student/login', [StudentAuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);



Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/students-count', [DepartmentController::class, 'studentCounts']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
