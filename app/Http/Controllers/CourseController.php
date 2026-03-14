<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('department')
            ->withCount('students') // dynamically counts enrolled students
            ->get()
            ->map(function($course) {
                return [
                    'id' => $course->id,
                    'course_name' => $course->course_name,
                    'enrolled_students' => $course->students_count,
                    'department' => $course->department ? [
                        'id' => $course->department->id,
                        'department_name' => $course->department->department_name,
                    ] : null,
                    'created_at' => $course->created_at,
                    'updated_at' => $course->updated_at,
                ];
            });

        return response()->json([
            'status' => 'success',
            'data' => $courses
        ]);
    }

    public function show($id)
    {
        $course = Course::with(['department', 'students'])->find($id);

        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $course->id,
                'course_name' => $course->course_name,
                'enrolled_students' => $course->students->count(),
                'department' => $course->department ? [
                    'id' => $course->department->id,
                    'department_name' => $course->department->department_name,
                ] : null,
                'students' => $course->students->map(function($student) {
                    return [
                        'id' => $student->id,
                        'name' => $student->name,
                        'email' => $student->email,
                        'student_number' => $student->student_number,
                    ];
                }),
                'created_at' => $course->created_at,
                'updated_at' => $course->updated_at,
            ]
        ]);
    }
}