<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'student_number' => 'required'
        ]);

        $student = Student::where('email', $request->email)
            ->where('student_number', $request->student_number)
            ->first();

        if (!$student) {
            return response()->json([
                'message' => 'Invalid student credentials'
            ], 401);
        }

        $token = $student->createToken('student-token')->plainTextToken;

        return response()->json([
            'type' => 'student',
            'student' => $student,
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $request->user('sanctum')->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Student logged out successfully'
        ]);
    }
}