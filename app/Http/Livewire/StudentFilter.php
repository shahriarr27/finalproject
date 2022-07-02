<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class StudentFilter extends Component
{

    public $Year;
    public $Semester;
    public $selectedYear = null;
    public $selectedSemester = null;
    public $filterResult;
    public $filterResult2;

    public function mount(){
        // $this->showAll = User::orderBy('course_code', 'asc')->get();
        $this->year = collect();
        $this->semester = collect();
    }


    public function render()
    {
        $title = 'All Students';
        $students = User::orderBy('id', 'desc')
        ->get()->where('reg_type', 'student' );
        
        $session = User::where('reg_type', 'student' )
        ->distinct()
        ->get('student_session');
        return view('livewire.student-filter')->with(['students' => $students, 'session'=> $session,'title'=>$title]);
        
    }

    public function updatedSelectedYear($year_id){
        $this->Semester = User::where('student_year', $year_id)->orderBy('student_id', 'asc')->get();
    }

    public function updatedSelectedSemester($student_semester_id){
        $this->filterResult = User::where('student_semester', $student_semester_id)->orderBy('student_id', 'asc')->get();
    }
}
