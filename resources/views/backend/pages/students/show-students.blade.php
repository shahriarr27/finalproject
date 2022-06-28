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
            {{-- @include('inc.messages') --}}
               @if (count($students)>0)
               <div class="row">
                <div class="col-md-12">
                  <div class="tabbable-line">
                    <!-- <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab1" data-bs-toggle="tab"> List View </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-bs-toggle="tab"> Grid View </a>
                                        </li>
                                    </ul> -->
                    <ul class="nav customtab nav-tabs" role="tablist">
                      <li class="nav-item"><a href="#tab1" class="nav-link active"
                          data-bs-toggle="tab">List
                          View</a></li>
                      <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                          View</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-box">
                              <div class="card-head">
                                <header>All Students</header>
                                <div class="tools">
                                  <a class="fa fa-repeat btn-color box-refresh"
                                    href="javascript:;"></a>
                                  <a class="t-collapse btn-color fa fa-chevron-down"
                                    href="javascript:;"></a>
                                </div>
                              </div>
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-md-3 col-sm-6 col-6">
                                      <div class="search-wrapper p-3">
                                        <select name="" id="session-filter" class="custom-select filter">
                                          <option value="">Select Session</option>
                                          @foreach ($session as $student_session)
                                          <option value="{{$student_session->student_session}}">{{$student_session->student_session}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-md-3"></div>
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
                                <div class="result-table">
                                  <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-6"></div>
                                  </div>
                                  <table
                                    class="table table-borderless table-hover order-column valign-middle"
                                    id="example4">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Session </th>
                                        <th> Gender </th>
                                        <th> Date of birth </th>
                                        <th> Mobile </th>
                                        <th> Email </th>
                                        @if (Auth::user()->admin_role == 'super_admin')
                                        <th> Action </th>
                                        @endif
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($students as $student)
                                      @if ($student->approval==1)
                                      <tr class="odd gradeX">
                                        <td class="patient-img">
                                          <img src="{{ url('storage/profile_pictures/'.$student->profile_picture) }}"
                                            alt="">
                                        </td>
                                        <td>{{$student->student_id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->student_session}}</td>
                                        <td class="left text-capitalize">{{$student->gender}}</td>
                                        <td class="left">{{$student->date_of_birth}}</td>
                                        <td><a href="tel:{{$student->mobile}}">
                                          {{$student->mobile}} </a></td>
                                        <td><a href="mailto:{{$student->email}}">
                                          {{$student->email}} </a></td>
                                          
                                        @if (Auth::user()->admin_role == 'super_admin')
                                        <td>
                                          <a href="users/{{$student->id}}/edit"
                                            class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i>
                                          </a>
                                          <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                          </button>
                                        </td>
                                        @endif
                                      </tr>
                                          
                                      @endif
                                      @endforeach
                                      
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab2">
                        <div class="row">
                          @foreach ($students as $student)
                          <div class="col-md-4">
                            <div class="card card-box">
                              <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                  <img src="{{ url('storage/profile_pictures/'.$student->profile_picture) }}" class="doctor-pic"
                                    alt="">
                                  <div class="profile-usertitle">
                                    <div class="doctor-name">{{$student->name}}</div>
                                  </div>
                                  <p>{{$student->address}}</p>
                                  <div>
                                    <p><i class="fa fa-phone"></i><a href="tel:{{$student->mobile}}">
                                      {{$student->mobile}} </a></p>
                                  </div>
                                  <div class="profile-userbuttons">
                                    <a href="professor_profile.html"
                                      class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                      More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   
               @else
               <p>No teacher found!</p>
					
               @endif

        </div>
        <!-- end page content -->
  
      </div>
      <!-- end page container -->
  
      <!-- start footer -->
        @include('backend.back_layouts.footer')
      <!-- end footer -->
  
    </div>
  
  @endsection