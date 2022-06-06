<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTitle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'course_year_id',
        'course_semester_id',
        'course_code',
        'course_title',
    ];
}
