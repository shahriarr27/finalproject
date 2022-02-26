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
                
							 @if (session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
                      <p>{{session()->get('success')}}</p>
                      <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </a>
                  </div>
                @endif


                <div class="row">
                  <div class="card-box">
                    <div class="card-head">
                      <header>All Courses</header>
                    </div>
                    <div class="card-body ">
                      <!-- start course list -->
                      <div class="row">
                        @foreach ($course as $courses)
                          <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="blogThumb">
                              <div class="thumb-center"><img class="img-responsive" alt="user"
                                  src="{{ url('storage/course_image/'.$courses->course_image) }}" style="width: 100%; height: 130px; object-fit:cover; object-position:center;"></div>
                              <div class="course-box">
                                <h4><b>{{$courses->course_title}}</b></h4>
                                <p><span><i class="ti-alarm-clock"></i> Course Code: {{$courses->course_code}}</span></p>
                                <p><span><i class="ti-user"></i> Professor: {{$courses->course_teacher}}</span></p>
                                <p><span><i class="ti-user"></i> Course Credit: {{$courses->course_credit}}</span></p>
                                <p><span><i class="ti-user"></i> Contact Hours: {{$courses->course_hrs}}hrs</span></p>
                                <br>
                                <a href="courses/{{$courses->id}}" role="button"
                                  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">See Details</a>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                      <!-- End course list -->
                    </div>
                  </div>
                </div>

            {{-- //copy from down --}}
            </div>
        </div>
        <!-- end page content -->

    </div>
    <!-- end page container -->

    <!-- start footer -->
    @include('backend.back_layouts.footer')
    <!-- end footer -->

</div>

@endsection
