<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCode extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'course_year_id',
        'course_semester_id',
        'course_code',
    ];
}
