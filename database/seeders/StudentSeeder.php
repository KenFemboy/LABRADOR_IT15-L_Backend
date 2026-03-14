<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $genders = ['Male', 'Female'];

        for ($i = 1; $i <= 500; $i++) {

            // Create student
            $student = Student::create([
                'student_number' => '2026-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'gender' => $genders[array_rand($genders)],
                'birth_date' => fake()->date('Y-m-d', '2006-01-01'),
                'email' => fake()->unique()->safeEmail(),
                'department_id' => rand(1, 7),
                'year_level' => rand(1,4),
            ]);

            // Enroll student in 1-3 random courses from their department
            $courses = Course::where('department_id', $student->department_id)
                ->inRandomOrder()
                ->take(rand(1,3)) // assign 1-3 courses
                ->pluck('id');

            $student->courses()->syncWithoutDetaching($courses);
        }
    }
}