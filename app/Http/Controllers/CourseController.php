<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course =  Course::orderBy('id', 'desc')
        ->get();
        return view('backend.pages.courses.show-courses')->with('course', $course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technames = User::get()->where('reg_type', 'teacher');
        return view('backend.pages.courses.create-course')->with('technames', $technames);
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
            'course_code' => 'required',
            'course_title' => 'required',
            'course_year' => 'required',
            'course_semester' => 'required',
            'course_credit' => 'required',
            'course_hrs' => 'required',
            'course_teacher' => 'required',
            'course_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'course_details' => 'required',
        ]);

        
        if($request->hasFile('course_image')){
            $name = $request->file('course_image')->getClientOriginalName();
            $filename = time().$name;
            $request->file('course_image')->storeAs('public/course_image',  $filename);
        }

        $course = Course::create([
            'course_code' => $request->course_code,
            'course_title' => $request->course_title,
            'course_year' => $request->course_year,
            'course_semester' => $request->course_semester,
            'course_credit' => $request->course_credit,
            'course_hrs' => $request->course_hrs,
            'course_teacher' => $request->course_teacher,
            'course_image' => $filename,
            'course_details' => $request->course_details,
        ]);
        $course->save();

        return redirect()->action([CourseController::class, 'index'])->with('success', 'Course '.$course->course_code.' added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course_details = Course::find($id);
        return view('backend.pages.courses.course-details')->with('course_details', $course_details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_course = Course::find($id);
        $technames = User::get()->where('reg_type', 'teacher');
        return view('backend.pages.courses.edit-course')->with(['edit_course'=> $edit_course, 'technames'=> $technames]);
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
        $edit_course = Course::find($id);
        $request->validate([
            'course_code' => 'required',
            'course_title' => 'required',
            'course_year' => 'required',
            'course_semester' => 'required',
            'course_credit' => 'required',
            'course_hrs' => 'required',
            'course_teacher' => 'required',
            'course_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'course_details' => 'required',
        ]);

        $edit_course->course_code = $request->input('course_code');
        $edit_course->course_title = $request->input('course_title');
        $edit_course->course_year = $request->input('course_year');
        $edit_course->course_semester = $request->input('course_semester');
        $edit_course->course_credit = $request->input('course_credit');
        $edit_course->course_hrs = $request->input('course_hrs');
        $edit_course->course_teacher = $request->input('course_teacher');
        $edit_course->course_details = $request->input('course_details');

        if($request->hasFile('course_image')){

            $destination = storage_path('app/public/course_image/'.$edit_course->course_image);

            if(File::exists($destination)){
                File::delete($destination);
            };
            $file = $request->file('course_image')->getClientOriginalName();
            // $extension = $request->file('course_image')->getClientOriginalExtension();
            $filename = time().$file;
            $request->file('course_image')->storeAs('public/course_image',  $filename);
            $edit_course->course_image = $filename;
        }

        $edit_course->update();

        return redirect()->action([CourseController::class, 'index'])->with('success', 'Course '.$edit_course->course_code.' updated successfully!');

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

    public function boot()
    {
        View::share('key', 'value');
    }
}
