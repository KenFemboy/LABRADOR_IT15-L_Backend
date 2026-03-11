<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Computer Engineering',
            'Electrical Engineering',
            'Information Technology',
            'Psychology',
            'Business Administration',
            'Education',
            'Information Systems'
        ];

        $genders = ['Male', 'Female'];

        for ($i = 1; $i <= 500; $i++) {

            Student::create([
                'student_number' => '2026-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'gender' => $genders[array_rand($genders)],
                'birth_date' => fake()->date('Y-m-d', '2006-01-01'),
                'email' => fake()->unique()->safeEmail(),
                'course' => $courses[array_rand($courses)],
                'year_level' => rand(1,4),
            ]);
        }
    }
}