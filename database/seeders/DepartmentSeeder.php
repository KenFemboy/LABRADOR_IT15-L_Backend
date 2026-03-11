<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [

            ['department_name' => 'Computer Engineering', 'total_students' => 120],
            ['department_name' => 'Electrical Engineering', 'total_students' => 95],
            ['department_name' => 'Information Technology', 'total_students' => 210],
            ['department_name' => 'Psychology', 'total_students' => 80],
            ['department_name' => 'Business', 'total_students' => 160],
            ['department_name' => 'Education', 'total_students' => 130],
            ['department_name' => 'Information Systems', 'total_students' => 75],

        ];

        DB::table('departments')->insert($departments);
    }
}