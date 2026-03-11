<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::with('courses')->get();

        return response()->json($departments);
    }
}
