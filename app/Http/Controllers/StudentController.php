<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Get courses for a specific student
    public function getCourses($id)
    {
        $student = Student::with('courses.department')->find($id);

        if (!$student) {
            return response()->json([
                'status' => 'error',
                'message' => 'Student not found'
            ], 404);
        }

        $courses = $student->courses->map(function($course) {
            return [
                'id' => $course->id,
                'course_name' => $course->course_name,
                'department' => $course->department ? [
                    'id' => $course->department->id,
                    'department_name' => $course->department->department_name,
                ] : null,
            ];
        });

        return response()->json([
            'status' => 'success',
            'student' => [
                'id' => $student->id,
                'name' => $student->first_name . ' ' . $student->last_name,
                'student_number' => $student->student_number,
                'email' => $student->email,
                'courses' => $courses,
                'year_level' => $student->year_level,
            ],
        ]);
    }
}