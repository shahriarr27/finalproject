<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseFilter extends Component
{

    public $Year;
    public $Semester;
    public $selectedYear = null;
    public $selectedSemester = null;
    public $filterResult;
    public $filterResult2;

    public function mount(){
        $this->showAll = Course::orderBy('course_code', 'asc')->get();
        $this->year = collect();
        $this->semester = collect();
    }

    public function render()
    {
        // $filterCourse = Course::when($this->byYear, function($query){
        //     $query->where('course_year', $this->byYear);
        // })->search($this->search);
        // $course =  Course::orderBy('course_code', 'asc')
        // ->get();
        return view('livewire.course-filter');
    }

    public function updatedSelectedYear($year_id){
        $this->Semester = Course::where('course_year', $year_id)->orderBy('course_code', 'asc')->get();
    }

    public function updatedSelectedSemester($course_semester_id){
        $this->filterResult = Course::where('course_semester', $course_semester_id)->orderBy('course_code', 'asc')->get();
    }
    
}
