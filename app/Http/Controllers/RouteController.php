<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function schedule1_1(){
        $title = '1y-1s Schedules';
        $sort = array('sun', 'mon', 'tue', 'wed', 'thr');
        $schedules = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('schedule_day')->sortBy( function($item, $key) use ($sort) {
            return array_search($key, $sort);
        });
        $schedulesTime = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('startTime');
        
        $joinTable = Schedule::join('course', 'course.course_code', '=' , 'schedules2.course_code')->distinct()->get(['course.course_title', 'course.course_teacher', 'course.course_code']);

        // dd($joinTable);
        // dd($getysem);
        // $schedules = Schedule::orderByRaw(DB::raw("FIELD(schedule_day, 'sun', 'mon', 'tue', 'wed', 'thr') ASC"))->get()->unique('schedule_day');
        $sc_courses = Schedule::orderBy('startTime', 'asc')->distinct()->get();
        $matchthese = ['course_year' => '1', 'course_semester' => '1'];
        $sc_ys = Schedule::where($matchthese)->get();

        
        return view('backend.pages.schedule.1y1s')->with(['schedules'=> $schedules, 'sc_courses'=>$sc_courses, 'schedulesTime' =>$schedulesTime, 'joinTable'=> $joinTable,'title'=>$title]);
    }

    
    public function schedule1_2(){
        $title = '1y-2s Schedules';
        $sort = array('sun', 'mon', 'tue', 'wed', 'thr');
        $schedules = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('schedule_day')->sortBy( function($item, $key) use ($sort) {
            return array_search($key, $sort);
        });
        $schedulesTime = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('startTime');
        
        $joinTable = Schedule::join('course', 'course.course_code', '=' , 'schedules2.course_code')->distinct()->get(['course.course_title', 'course.course_teacher', 'course.course_code']);

        // dd($joinTable);
        // dd($getysem);
        // $schedules = Schedule::orderByRaw(DB::raw("FIELD(schedule_day, 'sun', 'mon', 'tue', 'wed', 'thr') ASC"))->get()->unique('schedule_day');
        $sc_courses = Schedule::orderBy('startTime', 'asc')->distinct()->get();
        $matchthese = ['course_year' => '1', 'course_semester' => '1'];
        $sc_ys = Schedule::where($matchthese)->get();

        
        return view('backend.pages.schedule.1y2s')->with(['schedules'=> $schedules, 'sc_courses'=>$sc_courses, 'schedulesTime' =>$schedulesTime, 'joinTable'=> $joinTable,'title'=>$title]);
    }
}
