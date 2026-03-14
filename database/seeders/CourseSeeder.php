<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Computer Engineering' => [
                'Digital Logic Design',
                'Microprocessors and Microcontrollers',
                'Computer Architecture',
                'Embedded Systems',
            ],
            'Electrical Engineering' => [
                'Electrical Circuits',
                'Power Systems Engineering',
                'Control Systems',
                'Power Electronics',
            ],
            'Information Technology' => [
                'Web Development',
                'Database Management Systems',
                'Cybersecurity Fundamentals',
                'Cloud Computing',
            ],
            'Psychology' => [
                'Introduction to Psychology',
                'Developmental Psychology',
                'Cognitive Psychology',
                'Abnormal Psychology',
            ],
            'Business' => [
                'Principles of Management',
                'Marketing Strategies',
                'Financial Accounting',
                'Business Ethics',
            ],
            'Education' => [
                'Foundations of Education',
                'Educational Psychology',
                'Curriculum Development',
                'Classroom Management',
            ],
            'Information Systems' => [
                'Systems Analysis and Design',
                'Enterprise Resource Planning',
                'Information Systems Security',
                'Data Analytics',
            ],
        ];

        foreach ($courses as $deptName => $deptCourses) {
            $department = Department::where('department_name', $deptName)->first();
            if (!$department) continue;

            foreach ($deptCourses as $courseName) {
                DB::table('courses')->updateOrInsert(
                    [
                        'department_id' => $department->id,
                        'course_name' => $courseName
                    ]
                );
            }
        }
    }
}