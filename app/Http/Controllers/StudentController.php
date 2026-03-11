<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('course')->get();

        return response()->json([
            'status' => 'success',
            'data' => $students
        ]);
    }
    
}