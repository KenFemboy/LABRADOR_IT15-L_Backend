<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolDay extends Model
{
    protected $fillable = [
        'date',
        'type',
        'title',
        'description',
        'attendance_required'
    ];
}