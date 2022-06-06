
                          <table class="table table-bordered table-hover bg-light mt-4 class-schedule-table">
                            
                            <thead>
                                <th class="w-20 text-center">Day/Time</th>
                                <th class="text-sm text-center">09:00 AM - 10:00 AM</th>
                                <th class="text-sm text-center">10:00 AM - 11:00 AM</th>
                                <th class="text-sm text-center">11:00 AM - 12:00 PM</th>
                                <th class="text-sm text-center">12:00 PM - 01:00 PM</th>
                                <th class="text-sm text-center">02:00 PM - 03:00 PM</th>
                                <th class="text-sm text-center">03:00 PM - 04:00 PM</th>
                                <th class="text-sm text-center">04:00 PM - 05:00 PM</th>
                                {{-- @foreach ($schedules as $item)
                                  @if ($item->course_year == 1 && $item->course_semester == 1)
                                    <th class="text-center text-sm th-time">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</th>
                                  @endif
                                @endforeach --}}
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Sunday</td>
                                    @foreach ($schedules as $item)
                                        @if ($item->course_year == 1 && $item->course_semester == 1)
                                        <td>
                                            @if ($item->schedule_day == 'sun')
                                              {{-- @if ($item->course_year == 1 && $item->course_semester == 1)
                                                <div class="text-center text-sm th-time fw-bold">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</div>
                                              @endif --}}
                                              {{-- <hr class="m-0 mt-2"> --}}
                                                  <div class="class-details">
                                                      <p class="ccode">{{$item->course_code}}</p>
                                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                                      <p class="tname">John Doe</p>
                                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                                  </div>
                                              @endif
                                            </td>
                                          @endif
                                    @endforeach
                                </tr>
                                <tr class="text-center">
                                    <td>Monday</td>
                                    @foreach ($schedules as $item)
                                        @if ($item->course_year == 1 && $item->course_semester == 1)
                                        <td>
                                              @if ($item->schedule_day == 'mon')
                                              {{-- @if ($item->course_year == 1 && $item->course_semester == 1)
                                              <div class="text-center text-sm th-time fw-bold">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</div>
                                            @endif --}}
                                            {{-- <hr class="m-0 mt-2"> --}}
                                                  <div class="class-details">
                                                      <p class="ccode">{{$item->course_code}}</p>
                                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                                      <p class="tname">John Doe</p>
                                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                                  </div>
                                              @endif
                                            </td>
                                          @endif
                                    @endforeach
                                </tr>
                                <tr class="text-center">
                                    <td>Tuesday</td>
                                    @foreach ($schedules as $item)
                                        @if ($item->course_year == 1 && $item->course_semester == 1)
                                        <td>
                                              @if ($item->schedule_day == 'tue')
                                                  <div class="class-details">
                                                      <p class="ccode">{{$item->course_code}}</p>
                                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                                      <p class="tname">John Doe</p>
                                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                                  </div>
                                              @endif
                                            </td>
                                          @endif
                                    @endforeach
                                </tr>
                                <tr class="text-center">
                                    <td>Wednesday</td>
                                    @foreach ($schedules as $item)
                                        @if ($item->course_year == 1 && $item->course_semester == 1)
                                        <td>
                                              @if ($item->schedule_day == 'wed')
                                                  <div class="class-details">
                                                      <p class="ccode">{{$item->course_code}}</p>
                                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                                      <p class="tname">John Doe</p>
                                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                                  </div>
                                              @endif
                                            </td>
                                          @endif
                                    @endforeach
                                </tr>
                                <tr class="text-center">
                                    <td>Thursday</td>
                                    @foreach ($schedules as $item)
                                        @if ($item->course_year == 1 && $item->course_semester == 1)
                                        <td>
                                              @if ($item->schedule_day == 'thr')
                                                  <div class="class-details">
                                                      <p class="ccode">{{$item->course_code}}</p>
                                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                                      <p class="tname">John Doe</p>
                                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                                  </div>
                                              @endif
                                            </td>
                                          @endif
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>














                        ------------------------------------

                        @foreach ($schedules as $item)
                                  @if ($item->course_year == 1 && $item->course_semester == 1)
                                    <tr>
                                      <td>{{$item->schedule_day}}</td>
                                      <td>
                                        <div class="class-details">
                                          <p class="ccode">{{$item->course_code}}</p>
                                          <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                          <p class="tname">John Doe</p>
                                          <p class="rno">Room: {{$item->schedule_room}}</p>
                                        </div>
                                    </td>
                                    <td>
                                      <div class="class-details">
                                        <p class="ccode">{{$item->course_code}}</p>
                                        <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                        <p class="tname">John Doe</p>
                                        <p class="rno">Room: {{$item->schedule_room}}</p>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="class-details">
                                        <p class="ccode">{{$item->course_code}}</p>
                                        <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                        <p class="tname">John Doe</p>
                                        <p class="rno">Room: {{$item->schedule_room}}</p>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="class-details">
                                      <p class="ccode">{{$item->course_code}}</p>
                                      <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                      <p class="tname">John Doe</p>
                                      <p class="rno">Room: {{$item->schedule_room}}</p>
                                    </div>
                                </td>
                                <td>
                                  <div class="class-details">
                                    <p class="ccode">{{$item->course_code}}</p>
                                    <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                    <p class="tname">John Doe</p>
                                    <p class="rno">Room: {{$item->schedule_room}}</p>
                                  </div>
                              </td>
                              <td>
                                <div class="class-details">
                                  <p class="ccode">{{$item->course_code}}</p>
                                  <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                  <p class="tname">John Doe</p>
                                  <p class="rno">Room: {{$item->schedule_room}}</p>
                                </div>
                            </td>
                            <td>
                              <div class="class-details">
                                <p class="ccode">{{$item->course_code}}</p>
                                <p class="ctime">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</p>
                                <p class="tname">John Doe</p>
                                <p class="rno">Room: {{$item->schedule_room}}</p>
                              </div>
                          </td>
                                    </tr>
                                  @endif
                                @endforeach













                                ---------------------------------------

                                
                              <thead>
                                <th>Day/Time</th>
                                @foreach ($schedules as $item => $details)
                                  @foreach ($details as $scheduleDetails)
                                    @if ($scheduleDetails->course_year == 1 && $scheduleDetails->course_semester == 1)
                                    <th class="text-center text-sm th-time">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</th>
                                        
                                    @endif
                                    @endforeach
                                @endforeach
                              </thead>
                              <tbody>
                                {{-- <p>{{$schedules}}</p> --}}
                                @foreach ($schedules as $item => $details)
                                  <tr>
                                    <td class="text-center text-uppercase"><strong>{{ $item }}<strong></td>
                                        @foreach ($details as $scheduleDetails)
                                          @if ($scheduleDetails->course_year == 1 && $scheduleDetails->course_semester == 1)
                                          <td>
                                                <div class="class-details">
                                                  <p class="ccode">{{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                  <p class="tname">John Doe</p>
                                                  <p class="rno">Room: {{$scheduleDetails->schedule_room}}</p>
                                                  <p>{{$scheduleDetails->schedule_day}}</p>
                                                </div>
                                          </td>
                                              
                                          @endif
                                          @endforeach
                                        
                                  </tr>
                                @endforeach
                              </tbody>










                              ------------------------------------
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
        
        $this->year = Year::all();
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
        $this->semester = Semester::where('course_year_id', $year_id)->get();
    }
    public function updatedSelectedSemester($course_semester_id){
        // $findYearSemester = ['course_year_id' => $year_id, 'course_semester_id' => $course_semester_id];
        $this->coursecode = CourseCode::where('course_semester_id', $course_semester_id)->get();
    }
    public function updatedSelectedCode($course_code){
        $this->coursetitle = CourseTitle::select('course_title')->where('course_code', $course_code)->get();
    }
    public function updatedSelectedTitle($course_title){
        $this->courseteacher = Course::select('course_teacher')->where('course_code', $course_title)->get();
    }
}
