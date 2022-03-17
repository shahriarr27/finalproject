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
                  <div class="col-sm-12">
                    <div class="card-box">
                      <div class="card-head">
                        <header>Add Schedule</header>
                        <button id="panel-button"
                          class="mdl-button mdl-js-button mdl-button--icon pull-right"
                          data-upgraded=",MaterialButton">
                          <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                          data-mdl-for="panel-button">
                          <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                          </li>
                          <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                          </li>
                          <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                        </ul>
                      </div>
                      <form action="{{ url('schedule') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body row">
                          <div class="col-lg-6 p-t-20">
                            <label for="course_year" class="text-muted text-sm mb-0">Select Year</label>
                            <select name="course_year" class="dynamic newclass" id="course_year" data-dependent="course_semester">
                              <option value="">Select Year</option>
                              @foreach ($getyear as $year)
                              <option value="{{$year->course_year}}">{{$year->course_year}}</option>
                              @endforeach
                            </select>
                            @error('course_year')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                            <label for="course_semester" class="text-muted text-sm mb-0">Select Semester</label>
                            <select name="course_semester" class="dynamic" id="course_semester" data-dependent="course_code">
                              <option value="">Select Semester</option>
                            </select>
                            @error('course_semester')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                            <label for="course_code" class="text-muted text-sm mb-0">Select Year</label>
                            <select name="course_code" class="dynamic" id="course_code">
                              <option value="">Select Course</option>
                            </select>
                            @error('course_code')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          {{-- <div class="col-lg-6 p-t-20">
                            <div
                              class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                              <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="course_code">
                              <label class="mdl-textfield__label">Course Code</label>
                            </div>
                            @error('course_code')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div> --}}
                          <div class="col-lg-6 p-t-20">
                            <div
                              class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                              <input class="mdl-textfield__input" type="text" id="txtCourseName" name="course_title">
                              <label class="mdl-textfield__label">Course Title</label>
                            </div>
                            @error('course_title')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                            <div
                              class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                              <input class="mdl-textfield__input" type="text" id="coursecredit" name="course_credit">
                              <label class="mdl-textfield__label">Course Credit</label>
                            </div>
                            @error('course_credit')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                            <div
                              class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                              <input class="mdl-textfield__input" type="text" id="txtTimeLength" name="course_hrs">
                              <label class="mdl-textfield__label">Contact Hrs/Week</label>
                            </div>
                            @error('course_hrs')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                            <div
                              class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                              <input class="mdl-textfield__input" type="text" id="course_teacher" name="course_teacher" readonly
                                tabIndex="-1">
                              <label for="course_teacher" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                              </label>
                              <label for="course_teacher" class="mdl-textfield__label">Professor Name</label>
                              <ul data-mdl-for="course_teacher" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                @foreach ($technames as $item)
                                <li class="mdl-menu__item" value="{{$item->name}}">{{$item->name}}</li>
                                @endforeach  
                                
                              </ul>
                            </div>
                            @error('course_teacher')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-20">
                              <div class="file-upload pb-2" style="border-bottom: 1px solid rgb(216, 216, 216)">
                                  <div class="file-upload-select">
                                      <div class="icon-upload"><i class="fas fa-file-image"></i></div>
                                      <div class="file-select-name">Upload Course image...</div>
                                      <input type="file" name="course_image" id="file-upload-input">
                                  </div>
                              </div>
                              @error('course_image')
                                <div class="text-danger text-sm">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="col-lg-12 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield txt-full-width">
                              <label class="text-sm text-muted" for="text7">Course Syllabus</label>
                              <textarea class="ckeditor" rows="7" id="text7" name="course_details"></textarea>
                            </div>
                            @error('course_details')
                              <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="col-lg-12 p-t-20 text-center">
                            <button type="submit"
                              class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-success">Add Course</button>
                          </div>
                        </div>
                        {{csrf_field()}}
                      </form>
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
