<?php

namespace App\Models;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'enrolled_students', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

        public function students()
    {
        return $this->belongsToMany(Student::class ,'course_student');
    }
}