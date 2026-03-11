<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all()->groupBy('department');

        return response()->json([
            'status' => 'success',
            'data' => $courses
        ]);
    }
}