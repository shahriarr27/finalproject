<form action="{{ url('schedule/'.$editSchedule->id) }}" enctype="multipart/form-data" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body row">
        <div class="col-lg-6 p-t-20">
            <label for="course_year" class="text-muted text-sm mb-0">Select Year</label>
            <select name="course_year" class="form-control newclass" id="course_year" data-dependent="course_semester"
                wire:model="selectedYear">
                <option value="">Select Year</option>
                @foreach($year as $item)
                    <option value="{{ $item->course_year }}">{{ $item->course_year }}</option>
                @endforeach
            </select>
            {{-- <p>{{$selectedYear}}</p> --}}
            @error('course_year')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 p-t-20">
            <label for="course_semester" class="text-muted text-sm mb-0">Select Semester</label>
            <select name="course_semester" class="form-control" id="course_semester" data-dependent="course_code"
            wire:model="selectedSemester">
                <option value="" selected>Select Semester</option>
                @foreach($semester as $item)
                    <option value="{{ $item->course_semester }}">{{ $item->course_semester }}</option>
                @endforeach
            </select>
            {{-- <p>{{$selectedSemester}}</p> --}}
            @error('course_semester')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="col-lg-6 p-t-20">
            <label for="course_code" class="text-muted text-sm mb-0">Select Course Code</label>
            <select name="course_code" class="form-control" id="course_code" data-dependent="course_code"
            wire:model="selectedCode">
                <option value="" selected>Select Code</option>
                @foreach($coursecode as $item)
                @if ($item->course_year == $selectedYear && $item->course_semester == $selectedSemester)
                    <option value="{{ $item->course_code }}">{{ $item->course_code }}</option>
                @endif
                @endforeach
            </select>
            @error('course_semester')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
  
        {{-- <p>{{$courseTitle}}</p> --}}
    @if (!is_null($selectedCode))
        <div class="col-lg-6 p-t-20">
            @foreach ($courseTitle as $item)
                <label for="course_title" class="text-muted text-sm mb-0">Course Title</label>
                <input class="form-control" type="text" id="course_title" name="course_title" value="{{$item->course_title}}" readonly style="background: white" >
                @endforeach
        </div>
    @else
        <div class="col-lg-6 p-t-20">
            <label for="course_title" class="text-muted text-sm mb-0">Course Title</label>
            <input class="form-control" type="text" id="course_title" name="course_title" value="{{$selectedTitle}}" readonly style="background: white" >
            @error('course_title')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    @endif
  
    <div class="col-lg-6 p-t-20">
        <label for="schedule_day" class="text-muted text-sm mb-0">Select Day</label>
        <select name="schedule_day" class="form-control" id="schedule_day">
            <option value="" selected>Select Day</option>
            <option value="sun" {{ old('schedule_day', $editSchedule->schedule_day) == 'sun' ? 'selected' : '' }}>Sunday</option>
            <option value="mon" {{ old('schedule_day', $editSchedule->schedule_day) == 'mon' ? 'selected' : '' }}>Monday</option>
            <option value="tue" {{ old('schedule_day', $editSchedule->schedule_day) == 'tue' ? 'selected' : '' }}>Tuesday</option>
            <option value="wed" {{ old('schedule_day', $editSchedule->schedule_day) == 'wed' ? 'selected' : '' }}>Wednesday</option>
            <option value="thr" {{ old('schedule_day', $editSchedule->schedule_day) == 'thr' ? 'selected' : '' }}>Thursday</option>
        </select>
        {{-- <p>{{$selectedSemester}}</p> --}}
        @error('schedule_day')
            <div class="text-danger text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-6 p-t-20">
      <label for="startTime" class="text-muted text-sm mb-0">Starting Time</label>
        <input type="time" class="form-control" id="starTime" name="startTime" value="{{old('startTime', $editSchedule->startTime)}}">
        @error('startTime')
            <div class="text-danger text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-6 p-t-20">
      <label for="endTime" class="text-muted text-sm mb-0">Ending Time</label>
        <input type="time" class="form-control" id="endTime" name="endTime" value="{{old('endTime', $editSchedule->endTime)}}">
        @error('endTime')
            <div class="text-danger text-sm">{{ $message }}</div>
        @enderror
    </div>
    
      <div class="col-lg-6 p-t-20">
        <label for="schedule_room" class="text-muted text-sm mb-0">Select Room</label>
        <select name="schedule_room" class="form-control" id="schedule_room">
            <option value="" selected>Select Room</option>
            <option value="401" {{ old('schedule_room', $editSchedule->schedule_room) == '401' ? 'selected' : '' }}>401</option>
            <option value="402" {{ old('schedule_room', $editSchedule->schedule_room) == '402' ? 'selected' : '' }}>402</option>
            <option value="411" {{ old('schedule_room', $editSchedule->schedule_room) == '411' ? 'selected' : '' }}>411</option>
            <option value="411" {{ old('schedule_room', $editSchedule->schedule_room) == '412' ? 'selected' : '' }}>412</option>
            <option value="411" {{ old('schedule_room', $editSchedule->schedule_room) == '413' ? 'selected' : '' }}>413</option>
            <option value="411" {{ old('schedule_room', $editSchedule->schedule_room) == '414' ? 'selected' : '' }}>414</option>
            <option value="l01" {{ old('schedule_room', $editSchedule->schedule_room) == 'Lab-01' ? 'selected' : '' }}>Lab 01</option>
            <option value="l02" {{ old('schedule_room', $editSchedule->schedule_room) == 'Lab-02' ? 'selected' : '' }}>Lab 02</option>
        </select>
        {{-- <p>{{$selectedSemester}}</p> --}}
        @error('schedule_room')
            <div class="text-danger text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12 p-t-50 text-center">
        <button type="submit"
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-success">Update Schedule</button>
        <a data-toggle="modal" data-target="#scheduleModal{{$editSchedule->id}}" class="btn btn-danger mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20">Delete Schedule</a>
    </div>
    </div>
    {{ csrf_field() }}
  </form>
  
  <div class="modal fade" id="scheduleModal{{$editSchedule->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure to delete?</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="{{ route('schedule.destroy', [$editSchedule->id]) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
              <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
        </div>
      </div>
    </div>
  </div>