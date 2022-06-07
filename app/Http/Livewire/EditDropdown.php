<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Year;
use App\Models\Semester;
use App\Models\CourseCode;
use App\Models\CourseTitle;
use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

class EditDropdown extends Component
{
    public $editSchedule;

    public $year;
    public $semester;
    public $coursecode;
    public $courseTitle;
    public $courseteacher;
    public $selectedYear = null;
    public $selectedSemester = null;
    public $selectedCode = null;
    public $selectedTeacher = null;
    public $selectedTitle = null;

    public function mount($selectedCode = null){
        
        // $yrgroup = Course::distinct()->pluck('id');
        $this->year = Course::orderBy('course_year', 'asc')->get()->unique('course_year');
        $this->semester = collect();
        $this->coursecode = collect();
        $this->courseTitle = collect();
        $this->courseteacher = collect();

        $this->selectedCode = $selectedCode;

        if(!is_null($selectedCode)){
            $ccode = Schedule::find($selectedCode);
            // dd($ccode);
            if($ccode){
                $this->coursecode = Course::where('course_semester', $ccode->course_semester)->orderBy('course_code', 'asc')->get();
                $this->semester = Course::where('course_year', $ccode->course_year)->orderBy('course_code', 'asc')->get()->unique('course_semester');
                $this->courseTitle = Course::select('course_title')->where('course_code', $ccode->course_code)->get();
                $this->selectedCode = $ccode->course_code;
                $this->selectedSemester = $ccode->course_semester;
                $this->selectedYear = $ccode->course_year;
                $this->selectedtitle2 = $ccode->course_title;
            }
        }
    }
    
    public function render()
    {
        return view('livewire.edit-dropdown');
    }

    public function updatedSelectedYear($year_id){
        $this->semester = Course::where('course_year', $year_id)->get()->unique('course_semester');
        $this->selectedSemester = NULL;
    }
    public function updatedSelectedSemester($course_semester_id){
        // $findYearSemester = ['course_year_id' => $year_id, 'course_semester_id' => $course_semester_id];
        $this->coursecode = Course::where('course_semester', $course_semester_id)->orderBy('course_code', 'asc')->get();
    }
    public function updatedSelectedCode($coursecode){
        $this->courseTitle = Course::select('course_title')->where('course_code', $coursecode)->get();
    }
    public function updatedSelectedTitle($course_title){
        $this->courseteacher = Course::select('course_title')->where('course_code', $course_title)->get();
    }
}
