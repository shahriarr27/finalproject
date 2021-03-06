<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedules2';
    protected $fillable = [
        'course_year',
        'course_semester',
        'course_code',
        'course_title',
        'schedule_day',
        'startTime',
        'endTime',
        'schedule_room',
    ];
}
