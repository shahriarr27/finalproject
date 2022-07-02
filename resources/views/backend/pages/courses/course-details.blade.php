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

                
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="course-picture">
												<img src="{{ url('storage/course_image/'.$course_details->course_image) }}" class="img-responsive"
													alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name">{{$course_details->course_title}}</div>
										</div>
										<!-- END SIDEBAR USER TITLE -->
									</div>
								</div>
								<div class="card">
									<div class="card-head">
										<header>About Course</header>
									</div>
									<div class="card-body no-padding height-9">
										<ul class="list-group list-group-unbordered">
                      <li class="list-group-item">
                        <b>Course Code </b>
                        <div class="profile-desc-item pull-right">{{$course_details->course_code}}</div>
                      </li>
											<li class="list-group-item">
												<b>Course Credit</b>
												<div class="profile-desc-item pull-right">{{$course_details->course_credit}}</div>
											</li>
											<li class="list-group-item">
												<b>Contact Hrs </b>
												<div class="profile-desc-item pull-right">{{$course_details->course_hrs}} Hrs</div>
											</li>
											<li class="list-group-item">
												<b>Professor Name </b>
												<div class="profile-desc-item pull-right">{{$course_details->course_teacher}}</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo">
													<div id="biography">
														<h4 class="font-bold">Course Syllabus</h4>
														<hr>
                            {!!$course_details->course_details!!}
														<br><br>
														<div class="attached-file py-5">
															<p><b>Attached Files:</b></p>
															<p><a href="{{ url('storage/course_files/'.$course_details->course_file) }}">{{$course_details->course_file}}</a></p>
														</div>
														@if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'staff')
                            <a href="{{$course_details->id}}/edit" class="btn btn-sm btn-info">Edit Course</a>
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
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
  