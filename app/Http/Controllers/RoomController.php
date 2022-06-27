<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
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
        $sc_room = DB::table('schedules2')->orderByRaw('startTime asc')->get()->groupBy('schedule_room');

        $joinTable = Schedule::join('course', 'course.course_code', '=' , 'schedules2.course_code')->distinct()->get(['course.course_title', 'course.course_teacher', 'course.course_code']);

        return view('backend.pages.schedule.roomtable')->with(['schedules'=> $schedules, 'sc_room'=>$sc_room, 'joinTable'=> $joinTable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
