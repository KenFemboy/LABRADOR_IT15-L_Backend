<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasApiTokens;
    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'email',
        'address',
        'course_id',
        'year_level'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}