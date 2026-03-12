<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
Route::get('/token-test', function(){
    $user = \App\Models\User::first();
    return $user->createToken('test')->plainTextToken;
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/departments-courses', [CourseController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
