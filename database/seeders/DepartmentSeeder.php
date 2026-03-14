<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            'Computer Engineering',
            'Electrical Engineering',
            'Information Technology',
            'Psychology',
            'Business',
            'Education',
            'Information Systems',
        ];

        foreach ($departments as $deptName) {
            DB::table('departments')->updateOrInsert(
                ['department_name' => $deptName]
            );
        }
    }
}