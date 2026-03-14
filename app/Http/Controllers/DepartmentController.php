<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Return all departments with their courses and enrolled students.
     */
    public function index()
    {
        // Load courses and students
        $departments = Department::with(['courses.students'])->get()->map(function($department) {

            return [
                'id' => $department->id,
                'department_name' => $department->department_name,
                'courses' => $department->courses->map(function($course) {
                    return [
                        'id' => $course->id,
                        'course_name' => $course->course_name,
                        'enrolled_students' => $course->students->count(),
                        'students' => $course->students->map(function($student) {
                            return [
                                'id' => $student->id,
                                'name' => $student->first_name . ' ' . $student->last_name,
                                'email' => $student->email,
                                'student_number' => $student->student_number,
                                'year_level' => $student->year_level,
                            ];
                        }),
                    ];
                }),
            ];
        });

        return response()->json([
            'status' => 'success',
            'data' => $departments
        ]);
    }
}