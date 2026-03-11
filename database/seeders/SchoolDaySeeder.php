<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolDay;

class SchoolDaySeeder extends Seeder
{
    public function run(): void
    {
        $calendar = [

            [
                'date' => '2026-06-01',
                'type' => 'event',
                'title' => 'Start of Classes',
                'description' => 'Opening of Academic Year',
                'attendance_required' => true
            ],

            [
                'date' => '2026-06-12',
                'type' => 'holiday',
                'title' => 'Philippine Independence Day',
                'description' => 'National Holiday',
                'attendance_required' => false
            ],

            [
                'date' => '2026-08-21',
                'type' => 'holiday',
                'title' => 'Ninoy Aquino Day',
                'description' => 'National Holiday',
                'attendance_required' => false
            ],

            [
                'date' => '2026-08-31',
                'type' => 'holiday',
                'title' => 'National Heroes Day',
                'description' => 'National Holiday',
                'attendance_required' => false
            ],

            [
                'date' => '2026-10-15',
                'type' => 'event',
                'title' => 'Midterm Examination',
                'description' => 'Midterm exams week',
                'attendance_required' => true
            ],

            [
                'date' => '2026-12-25',
                'type' => 'holiday',
                'title' => 'Christmas Day',
                'description' => 'Holiday',
                'attendance_required' => false
            ],

            [
                'date' => '2027-01-01',
                'type' => 'holiday',
                'title' => 'New Year',
                'description' => 'Holiday',
                'attendance_required' => false
            ]

        ];

        foreach ($calendar as $day) {
            SchoolDay::create($day);
        }
    }
}