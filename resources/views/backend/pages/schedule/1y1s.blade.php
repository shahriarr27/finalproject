@extends('backend.back_layouts.assets')

@section('content')

<div class="page-wrapper">

    <!-- start header -->
    @include('backend.back_layouts.header')
    <!-- end header -->

    <!-- start color quick setting -->
    @include('backend.back_layouts.settings')
    <!-- end color quick setting -->

    <!-- start page container -->
    <div class="page-container">

        <!-- start sidebar menu -->
        @include('backend.back_layouts.sidebar')
        <!-- end sidebar menu -->

        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                {{-- Breadcrumb start --}}
                @include('backend.back_layouts.breadcrumb')
                <!-- end Breadcrumb menu -->
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
                        <p>{{ session()->get('success') }}</p>
                        <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                @endif
                <!-- start widget -->
                
                <div class="table-wrapper">
                    <div class="card card-box">
                        <div class="card-head">
                          <header>1st Year 1st Semester Schedule</header>
                          <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh"
                              href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down"
                              href="javascript:;"></a>
                          </div>
                        </div>
                        <div class="card-body ">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                              <div class="btn-group show">
                                <a href="{{route('schedule.create')}}" id="addRow"
                                  class="btn btn-info">
                                  Add New <i class="fa fa-plus"></i>
                                </a>
                              </div>
                              @endif
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                              <div class="btn-group pull-right show">
                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                  data-bs-toggle="dropdown">Tools
                                  <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-print"></i> Print </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-file-pdf-o"></i> Save as
                                      PDF </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-file-excel-o"></i>
                                      Export to Excel </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="table-scroll">
                            <table class="table table-bordered table-hover bg-light mt-4 class-schedule-table">
                              
                                <thead>
                                  <th class="text-center">Day</th>
                                </thead>
                                <tbody>
                                  {{-- <p>{{$schedules}}</p> --}}
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>SUN<strong></td>
                                      @foreach ($schedules as $item => $details)
                                      @if ($item == 'sun')
                                        {{-- <td class="text-center text-uppercase text-danger"><strong>{{ $item }}<strong></td> --}}
                                          @foreach ($details as $scheduleDetails)
                                            @if ($scheduleDetails->course_year == '1st Year' && $scheduleDetails->course_semester == '1st Semester')
                                            <td class="class-details-td">
                                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                                              <a href="schedule/{{$scheduleDetails->id}}/edit">
                                                  <div class="class-details border border-primary py-2">
                                                    <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                    <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                      @foreach ($joinTable as $join)
                                                        @if ($scheduleDetails->course_code == $join->course_code)
                                                          <p class="tname text-info">
                                                            {{$join->course_teacher}}
                                                          </p>
                                                          <p>
                                                            {{$join->course_title}}
                                                          </p>
                                                        @endif
                                                      @endforeach
                                                    <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                  </div>
                                                </a>
                                                @else
                                                <div class="class-details border border-primary py-2">
                                                  <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                    @foreach ($joinTable as $join)
                                                      @if ($scheduleDetails->course_code == $join->course_code)
                                                        <p class="tname text-info">
                                                          {{$join->course_teacher}}
                                                        </p>
                                                        <p>
                                                          {{$join->course_title}}
                                                        </p>
                                                      @endif
                                                    @endforeach
                                                  <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                </div>
                                                @endif
                                            </td>
                                            @endif
                                          @endforeach
                                      @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>MON<strong></td>
                                      @foreach ($schedules as $item => $details)
                                      @if ($item == 'mon')
                                        {{-- <td class="text-center text-uppercase text-danger"><strong>{{ $item }}<strong></td> --}}
                                          @foreach ($details as $scheduleDetails)
                                            @if ($scheduleDetails->course_year == '1st Year' && $scheduleDetails->course_semester == '1st Semester')
                                            <td class="class-details-td">
                                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                                              <a href="schedule/{{$scheduleDetails->id}}/edit">
                                                  <div class="class-details border border-primary py-2">
                                                    <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                    <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                      @foreach ($joinTable as $join)
                                                        @if ($scheduleDetails->course_code == $join->course_code)
                                                          <p class="tname text-info">
                                                            {{$join->course_teacher}}
                                                          </p>
                                                          <p>
                                                            {{$join->course_title}}
                                                          </p>
                                                        @endif
                                                      @endforeach
                                                    <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                  </div>
                                                </a>
                                                @else
                                                <div class="class-details border border-primary py-2">
                                                  <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                    @foreach ($joinTable as $join)
                                                      @if ($scheduleDetails->course_code == $join->course_code)
                                                        <p class="tname text-info">
                                                          {{$join->course_teacher}}
                                                        </p>
                                                        <p>
                                                          {{$join->course_title}}
                                                        </p>
                                                      @endif
                                                    @endforeach
                                                  <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                </div>
                                                @endif
                                            </td>
                                            @endif
                                          @endforeach
                                      @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>TUE<strong></td>
                                      @foreach ($schedules as $item => $details)
                                      @if ($item == 'tue')
                                        {{-- <td class="text-center text-uppercase text-danger"><strong>{{ $item }}<strong></td> --}}
                                          @foreach ($details as $scheduleDetails)
                                            @if ($scheduleDetails->course_year == '1st Year' && $scheduleDetails->course_semester == '1st Semester')
                                            <td class="class-details-td">
                                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                                              <a href="schedule/{{$scheduleDetails->id}}/edit">
                                                  <div class="class-details border border-primary py-2">
                                                    <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                    <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                      @foreach ($joinTable as $join)
                                                        @if ($scheduleDetails->course_code == $join->course_code)
                                                          <p class="tname text-info">
                                                            {{$join->course_teacher}}
                                                          </p>
                                                          <p>
                                                            {{$join->course_title}}
                                                          </p>
                                                        @endif
                                                      @endforeach
                                                    <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                  </div>
                                                </a>
                                                @else
                                                <div class="class-details border border-primary py-2">
                                                  <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                    @foreach ($joinTable as $join)
                                                      @if ($scheduleDetails->course_code == $join->course_code)
                                                        <p class="tname text-info">
                                                          {{$join->course_teacher}}
                                                        </p>
                                                        <p>
                                                          {{$join->course_title}}
                                                        </p>
                                                      @endif
                                                    @endforeach
                                                  <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                </div>
                                                @endif
                                            </td>
                                            @endif
                                          @endforeach
                                      @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>WED<strong></td>
                                      @foreach ($schedules as $item => $details)
                                      @if ($item == 'wed')
                                        {{-- <td class="text-center text-uppercase text-danger"><strong>{{ $item }}<strong></td> --}}
                                          @foreach ($details as $scheduleDetails)
                                            @if ($scheduleDetails->course_year == '1st Year' && $scheduleDetails->course_semester == '1st Semester')
                                            <td class="class-details-td">
                                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                                              <a href="schedule/{{$scheduleDetails->id}}/edit">
                                                  <div class="class-details border border-primary py-2">
                                                    <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                    <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                      @foreach ($joinTable as $join)
                                                        @if ($scheduleDetails->course_code == $join->course_code)
                                                          <p class="tname text-info">
                                                            {{$join->course_teacher}}
                                                          </p>
                                                          <p>
                                                            {{$join->course_title}}
                                                          </p>
                                                        @endif
                                                      @endforeach
                                                    <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                  </div>
                                                </a>
                                                @else
                                                <div class="class-details border border-primary py-2">
                                                  <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                    @foreach ($joinTable as $join)
                                                      @if ($scheduleDetails->course_code == $join->course_code)
                                                        <p class="tname text-info">
                                                          {{$join->course_teacher}}
                                                        </p>
                                                        <p>
                                                          {{$join->course_title}}
                                                        </p>
                                                      @endif
                                                    @endforeach
                                                  <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                </div>
                                                @endif
                                            </td>
                                            @endif
                                          @endforeach
                                      @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>THR<strong></td>
                                      @foreach ($schedules as $item => $details)
                                      @if ($item == 'thr')
                                        {{-- <td class="text-center text-uppercase text-danger"><strong>{{ $item }}<strong></td> --}}
                                          @foreach ($details as $scheduleDetails)
                                            @if ($scheduleDetails->course_year == '1st Year' && $scheduleDetails->course_semester == '1st Semester')
                                            <td class="class-details-td">
                                              @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                                              <a href="schedule/{{$scheduleDetails->id}}/edit">
                                                  <div class="class-details border border-primary py-2">
                                                    <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                    <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                      @foreach ($joinTable as $join)
                                                        @if ($scheduleDetails->course_code == $join->course_code)
                                                          <p class="tname text-info">
                                                            {{$join->course_teacher}}
                                                          </p>
                                                          <p>
                                                            {{$join->course_title}}
                                                          </p>
                                                        @endif
                                                      @endforeach
                                                    <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                  </div>
                                                </a>
                                                @else
                                                <div class="class-details border border-primary py-2">
                                                  <p class="ccode"> {{$scheduleDetails->course_code}}</p>
                                                  <p class="ctime fw-bold">{{ date('g:i A', strtotime($scheduleDetails->startTime)). ' - ' .date('g:i A', strtotime($scheduleDetails->endTime))}}</p>
                                                    @foreach ($joinTable as $join)
                                                      @if ($scheduleDetails->course_code == $join->course_code)
                                                        <p class="tname text-info">
                                                          {{$join->course_teacher}}
                                                        </p>
                                                        <p>
                                                          {{$join->course_title}}
                                                        </p>
                                                      @endif
                                                    @endforeach
                                                  <p class="rno">Room: <strong>{{$scheduleDetails->schedule_room}}</strong></p>
                                                </div>
                                                @endif
                                            </td>
                                            @endif
                                          @endforeach
                                      @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>

            </div>

            {{-- //copy from here --}}
        </div>
        <!-- end page content -->

    </div>
    <!-- end page container -->

    <!-- start footer -->
    @include('backend.back_layouts.footer')
    <!-- end footer -->

</div>

@endsection
