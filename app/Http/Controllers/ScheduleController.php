<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort = array('sun', 'mon', 'tue', 'wed', 'thr');
        $schedules = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('schedule_day')->sortBy( function($item, $key) use ($sort) {
            return array_search($key, $sort);
        });
        // $schedules = Schedule::orderBy('startTime', 'asc')->distinct()->get();
        $sc_courses = Schedule::orderBy('startTime', 'asc')->distinct()->get();

        $joinTable = Schedule::join('course', 'course.course_code', '=' , 'schedules2.course_code')->distinct()->get(['course.course_title', 'course.course_teacher', 'course.course_code']);

        return view('backend.pages.schedule.show-schedule')->with(['schedules'=> $schedules, 'sc_courses'=>$sc_courses, 'joinTable'=> $joinTable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getyear=DB::table('course')->select('course_year')->groupBy('course_year')->orderBy('course_year','asc')->get();
        $technames = User::get()->where('reg_type', 'teacher');
        return view('backend.pages.schedule.create-schedule')->with(['technames'=> $technames, 'getyear'=> $getyear]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_year' => 'required',
            'course_semester' => 'required',
            'course_code' => 'required',
            'course_title' => 'required',
            'schedule_day' => 'required',
            // 'startTime' => 'required',
            // 'endTime' => 'required',
            'schedule_room' => 'required',
        ]);

        $startTime = Carbon::parse(str_replace(array('am', 'pm'), ':00', $request->input('startTime')));
        $endTime = Carbon::parse(str_replace(array('am', 'pm'), ':00', $request->input('endTime')));
        $dayId = $request->input('schedule_day');
        $sc_room = $request->input('schedule_room');
        $sc_year = $request->input('course_year');
        $sc_semester = $request->input('course_semester');


        $getysem=DB::table('schedules2')->select('*')->get();

        $timeExists = Schedule::where('schedule_day', $dayId)
                        ->where('startTime', $startTime)
                        ->where('endTime', $endTime)
                        ->exists();
        $dayExists = Schedule::where('schedule_day', $dayId)
                        ->exists();
        $roomExists = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->exists();
        $batchExists = Schedule::where('schedule_day', $dayId)
                        ->where('course_year', $sc_year)
                        ->where('course_semester', $sc_semester)
                        ->exists();
        foreach($getysem as $ys){

            if(($ys->course_year == $sc_year && $ys->course_year == $sc_semester && $timeExists)){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'Time is already taken!');
            }
            elseif($timeExists && $dayExists && $roomExists){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'Room is already taken!');
            }
            elseif($timeExists && $batchExists && $dayExists){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'They have another class at this time!');
            }
        }

        $schedule = Schedule::create([
            'course_year' => $request->course_year,
            'course_semester' => $request->course_semester,
            'course_code' => $request->course_code,
            'course_title' => $request->course_title,
            'schedule_day' => $request->schedule_day,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'schedule_room' => $request->schedule_room,
        ]);
        $schedule->save();

        return redirect()->action([ScheduleController::class, 'index'])->with('success', 'Schedule added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }

    public function getyear(){
		$getyear=DB::table('course')->orderBy('course_year','asc')->get();
		return view('backend.pages.schedule.create-schedule')->with('getyear', $getyear);
	}
}
