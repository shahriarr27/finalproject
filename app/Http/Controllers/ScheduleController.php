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
        $title = 'All Schedules';
        $sort = array('sun', 'mon', 'tue', 'wed', 'thr');
        $schedules = DB::table('schedules2')
        ->orderByRaw('startTime asc')
        ->get()->groupBy('schedule_day')->sortBy( function($item, $key) use ($sort) {
            return array_search($key, $sort);
        });
        // $schedules = Schedule::orderBy('startTime', 'asc')->distinct()->get();
        $sc_courses = Schedule::orderBy('startTime', 'asc')->distinct()->get();

        $joinTable = Schedule::join('course', 'course.course_code', '=' , 'schedules2.course_code')->distinct()->get(['course.course_title', 'course.course_teacher', 'course.course_code']);

        return view('backend.pages.schedule.show-schedule')->with(['schedules'=> $schedules, 'sc_courses'=>$sc_courses, 'joinTable'=> $joinTable,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Schedule';
        $getyear=DB::table('course')->select('course_year')->groupBy('course_year')->orderBy('course_year','asc')->get();
        $technames = User::get()->where('reg_type', 'teacher');
        return view('backend.pages.schedule.create-schedule')->with(['technames'=> $technames, 'getyear'=> $getyear,'title'=>$title]);
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
            'startTime' => 'required',
            'endTime' => 'required',
            'schedule_room' => 'required',
        ]);

        $startTime = Carbon::parse(str_replace(array('am', 'pm'), ':00', $request->input('startTime')))->addMinute(1);
        $endTime = $request->input('endTime');
        $dayId = $request->input('schedule_day');
        $sc_room = $request->input('schedule_room');
        $sc_year = $request->input('course_year');
        $sc_semester = $request->input('course_semester');

        $roomExistsBtwnST = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->where('startTime', '<', $startTime)
                        ->where('startTime', '>', $endTime)
                        ->exists();

        $roomExists = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->get();
        $roomExistsBtwn = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->where('endTime', '>', $startTime)
                        ->where('endTime', '<', $endTime)
                        ->exists();

        $batchClassExists = Schedule::where('schedule_day', $dayId)
                        ->where('course_year', $sc_year)
                        ->where('course_semester', $sc_semester)
                        ->get();
        $batchClassExistsBtwn = Schedule::where('schedule_day', $dayId)
                        ->where('course_year', $sc_year)
                        ->where('course_semester', $sc_semester)
                        ->where('endTime', '>', $startTime)
                        ->where('endTime', '<', $endTime)
                        ->exists();

            foreach($roomExists as $singleRE){
                if(($endTime > $singleRE->startTime && $endTime <= $singleRE->endTime) || ($startTime < $singleRE->startTime && $endTime > $singleRE->endTime)){
                    return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated at this time!');
                }
            };

            foreach($batchClassExists as $singleBCE){
                if(($endTime > $singleBCE->startTime && $endTime < $singleBCE->endTime) || ($startTime < $singleBCE->startTime && $endTime > $singleBCE->endTime)){
                    return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This batch have another schedule at this time!');
                }
            };

            if($roomExistsBtwn){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated between these times!');
            }

            if($roomExistsBtwnST){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated at this start times!');
            }
            if($batchClassExistsBtwn){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This batch have another schedule between these times!');
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
    public function edit($id)
    {
        $title = 'Edit Schedule';
        $editSchedule = Schedule::find($id);
        return view('backend.pages.schedule.edit-schedule')->with(['editSchedule'=> $editSchedule,'title'=>$title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_schedule = Schedule::find($id);

        $request->validate([
            'course_year' => 'required',
            'course_semester' => 'required',
            'course_code' => 'required',
            'course_title' => 'required',
            'schedule_day' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'schedule_room' => 'required',
        ]);

        $startTime = Carbon::parse(str_replace(array('am', 'pm'), ':00', $request->input('startTime')))->addMinute(1);
        // $endTime = Carbon::parse(str_replace(array('am', 'pm'), ':00', $request->input('endTime')));
        // $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');
        $dayId = $request->input('schedule_day');
        $sc_room = $request->input('schedule_room');
        $sc_year = $request->input('course_year');
        $sc_semester = $request->input('course_semester');

     


        $roomExistsBtwnST = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->where('startTime', '<', $startTime)
                        ->where('startTime', '>', $endTime)
                        ->exists();

        $roomExists = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->get();
        $roomExistsBtwn = Schedule::where('schedule_day', $dayId)
                        ->where('schedule_room', $sc_room)
                        ->where('endTime', '>', $startTime)
                        ->where('endTime', '<', $endTime)
                        ->exists();

        $batchClassExists = Schedule::where('schedule_day', $dayId)
                        ->where('course_year', $sc_year)
                        ->where('course_semester', $sc_semester)
                        ->get();
        $batchClassExistsBtwn = Schedule::where('schedule_day', $dayId)
                        ->where('course_year', $sc_year)
                        ->where('course_semester', $sc_semester)
                        ->where('endTime', '>', $startTime)
                        ->where('endTime', '<', $endTime)
                        ->exists();
        
            foreach($roomExists as $singleRE){
                if(($endTime > $singleRE->startTime && $endTime <= $singleRE->endTime) || ($startTime < $singleRE->startTime && $endTime > $singleRE->endTime)){
                    return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated at this time!');
                    // dd('room overlap');  
                    // || ($startTime > $singleRE->startTime && $endTime > $singleRE->endTime)  $startTime >= $singleRE->startTime && $endTime <= $singleRE->endTime) || 
                }
                // else{
                //     dd(' room ok');

                // }
            };

        // elseif($batchClassExists->count()>0){
            foreach($batchClassExists as $singleBCE){
                if(($endTime > $singleBCE->startTime && $endTime < $singleBCE->endTime) || ($startTime < $singleBCE->startTime && $endTime > $singleBCE->endTime)){
                    return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This batch have another schedule at this time!');
                //  dd('overlap');
                //    || ($startTime > $singleBCE->startTime && $endTime > $singleBCE->endTime)  ($startTime >= $singleBCE->startTime && $endTime <= $singleBCE->endTime) || 
                }
                // else{
                //     dd($startTime);

                // }
            };

            if($roomExistsBtwn){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated between these times!');
            }

            if($roomExistsBtwnST){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This room is allocated at this start times!');
            }
            if($batchClassExistsBtwn){
                return redirect()->action([ScheduleController::class, 'create'])->with('error', 'This batch have another schedule between these times!');
            }
        // }


        $edit_schedule->course_year = $request->input('course_year');
        $edit_schedule->course_semester = $request->input('course_semester');
        $edit_schedule->course_code = $request->input('course_code');
        $edit_schedule->course_title = $request->input('course_title');
        $edit_schedule->schedule_day = $request->input('schedule_day');
        $edit_schedule->startTime = $request->input('startTime');
        $edit_schedule->endTime = $request->input('endTime');
        $edit_schedule->schedule_room = $request->input('schedule_room');


        $edit_schedule->update();

        return redirect()->action([ScheduleController::class, 'index'])->with('success', 'Schedule Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_schedule = Schedule::find($id);
        $delete_schedule->delete();

        return redirect()->action([ScheduleController::class, 'index'])->with('success', 'Schedule deleted successfully!');
    }

    public function getyear(){
		$getyear=DB::table('course')->orderBy('course_year','asc')->get();
		return view('backend.pages.schedule.create-schedule')->with('getyear', $getyear);
	}
}
