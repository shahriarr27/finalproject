<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'course';
    protected $fillable = [
        'course_code',
        'course_title',
        'course_year',
        'course_semester',
        'course_credit',
        'course_hrs',
        'course_teacher',
        'course_image',
        'course_file',
        'course_details',
    ];

}
