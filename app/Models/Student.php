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
        'department_id',
        'year_level'
    ];
    public function department()
        {
            return $this->belongsTo(Department::class);
        }
    public function courses()
        {
            return $this->belongsToMany(Course::class, 'course_student');
        }
    
}