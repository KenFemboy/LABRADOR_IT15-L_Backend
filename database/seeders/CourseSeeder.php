<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [

            // Computer Engineering (department_id = 1)
            ['department_id' => 1, 'course_name' => 'Digital Logic Design', 'enrolled_students' => 20],
            ['department_id' => 1, 'course_name' => 'Microprocessors and Microcontrollers', 'enrolled_students' => 15],
            ['department_id' => 1, 'course_name' => 'Computer Architecture', 'enrolled_students' => 18],
            ['department_id' => 1, 'course_name' => 'Embedded Systems', 'enrolled_students' => 12],

            // Electrical Engineering (department_id = 2)
            ['department_id' => 2, 'course_name' => 'Electrical Circuits', 'enrolled_students' => 25],
            ['department_id' => 2, 'course_name' => 'Power Systems Engineering', 'enrolled_students' => 16],
            ['department_id' => 2, 'course_name' => 'Control Systems', 'enrolled_students' => 14],
            ['department_id' => 2, 'course_name' => 'Power Electronics', 'enrolled_students' => 10],

            // Information Technology (department_id = 3)
            ['department_id' => 3, 'course_name' => 'Web Development', 'enrolled_students' => 40],
            ['department_id' => 3, 'course_name' => 'Database Management Systems', 'enrolled_students' => 38],
            ['department_id' => 3, 'course_name' => 'Cybersecurity Fundamentals', 'enrolled_students' => 35],
            ['department_id' => 3, 'course_name' => 'Cloud Computing', 'enrolled_students' => 28],

        ];

        DB::table('courses')->insert($courses);
    }
}