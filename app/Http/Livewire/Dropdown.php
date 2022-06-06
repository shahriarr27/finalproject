<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Year;
use App\Models\Semester;
use App\Models\CourseCode;
use App\Models\CourseTitle;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class Dropdown extends Component
{
    public $year;
    public $semester;
    public $coursecode;
    public $coursetitle;
    public $courseteacher;
    public $selectedYear = null;
    public $selectedSemester = null;
    public $selectedCode = null;
    public $selectedTeacher = null;

    public function mount(){
        
        // $yrgroup = Course::distinct()->pluck('id');
        $this->year = Course::orderBy('course_year', 'asc')->get()->unique('course_year');
        $this->semester = collect();
        $this->coursecode = collect();
        $this->coursetitle = collect();
        $this->courseteacher = collect();
    }
    
    public function render()
    {
        // $this->year = DB::table('schedules_year')->get();
        return view('livewire.dropdown');
    }

    public function updatedSelectedYear($year_id){
        $this->semester = Course::where('course_year', $year_id)->get()->unique('course_semester');
        $this->selectedSemester = NULL;
    }
    public function updatedSelectedSemester($course_semester_id){
        // $findYearSemester = ['course_year_id' => $year_id, 'course_semester_id' => $course_semester_id];
        $this->coursecode = Course::where('course_semester', $course_semester_id)->orderBy('course_code', 'asc')->get();
    }
    public function updatedSelectedCode($course_code){
        $this->coursetitle = Course::select('course_title')->where('course_code', $course_code)->get();
    }
    public function updatedSelectedTitle($course_title){
        $this->courseteacher = Course::select('course_teacher')->where('course_code', $course_title)->get();
    }
}
