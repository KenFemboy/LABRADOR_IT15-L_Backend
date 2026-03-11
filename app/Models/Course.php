<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    protected $fillable = [
        'department_id',
        'course_name',
        'enrolled_students'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
        public function department()
    {
        return $this->belongsTo(Department::class);
    }
}