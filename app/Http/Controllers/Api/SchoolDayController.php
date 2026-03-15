<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SchoolDay;

class SchoolDayController extends Controller
{
    public function index()
{
    $days = SchoolDay::all()->map(function ($day) {
        return [
            'id' => $day->id,
            'title' => $day->title ?? ucfirst($day->type),
            'date' => $day->date,
            'type' => $day->type,
            'attendance_required' => $day->attendance_required
        ];
    });

    return response()->json($days);
}
}