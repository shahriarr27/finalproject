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
									<header>Basic Information</header>
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
								@foreach ($info as $id_info)
                    
								<form  method="POST" action="/users/{{$id_info->id}}">
									@method('PUT')
									@csrf
									<div class="card-body row">
										<div class="col-lg-12 text-center p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<img src="{{ url('storage/profile_pictures/'.$id_info->profile_picture) }}" alt="DP" class="img-fluid" style="width: 150px; height: 150px; object-fit:cover; object-position:center; border-radius:50%;">
											</div>
											@error('address')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txtFirstName" name="firstname" value="{{ $id_info->firstname }}" disabled>
												<label class="mdl-textfield__label">First Name</label>
											</div>
											@error('firstname')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txtLasttName" name="lastname" value="{{ $id_info->lastname }}" disabled>
												<label class="mdl-textfield__label">Last Name</label>
											</div>
											@error('lastname')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txtLasttName" name="lastname" value="{{ $id_info->name }}">
												<label class="mdl-textfield__label" disabled>Full Name</label>
											</div>
											@error('lastname')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="dateOfBirth" name="date_of_birth" value="{{ $id_info->date_of_birth }}" disabled>
												<label class="mdl-textfield__label">Birth Date</label>
											</div>
											@error('date_of_birth')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
                      @if ($id_info->reg_type == 'student')
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="designation" name="designation" value="{{ $id_info->student_session }}" disabled>
												<label class="mdl-textfield__label">Session</label>
											</div>
                      @elseif ($id_info->reg_type == 'teacher')
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="designation" name="designation" value="{{ $id_info->designation }}" disabled>
												<label class="mdl-textfield__label">Designation</label>
											</div>
                      @endif

											@error('designation')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
                      @if ($id_info->reg_type == 'student')
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="designation" name="designation" value="{{ $id_info->student_id }}" disabled>
												<label class="mdl-textfield__label">Student ID</label>
											</div>
                      @endif

											@error('designation')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width select-custom">
												<input class="mdl-textfield__input" type="text" id="sample2"
													readonly tabIndex="-1" name="gender" value="{{  $id_info->gender }}" class="text-capitalize" disabled>
												<label for="sample2" class="pull-right margin-0">
													<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												</label>
												<label for="sample2" class="mdl-textfield__label">Gender</label>
												<ul data-mdl-for="sample2"
													class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
													<li class="mdl-menu__item" data-val="DE">Male</li>
													<li class="mdl-menu__item" data-val="BY">Female</li>
												</ul>
											</div>
											@error('gender')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="text5" name="mobile" value="{{  $id_info->mobile }}" disabled>
												<label class="mdl-textfield__label" for="text5">Mobile Number</label>
												<span class="mdl-textfield__error">Number required!</span>
											</div>
											@error('mobile')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<p class="text-sm mb-3 text-muted">Address</p>
												<textarea class="mdl-textfield__input" rows="6" id="text7" name="address" disabled>{{ $id_info->address }}</textarea>
											</div>
											@error('address')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<p class="text-sm mb-3 text-muted">Registered As</p>
												<p class="text-capitalize">{{ $id_info->reg_type }}</p>
											</div>
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<p class="text-sm mb-3 text-muted">Approve Registration</p>
												<select name="approval" id="approval" class="custom-select">
                          @if ($id_info->approval == 0)
                            <option value="1">Approve</option>
                            <option value="0" selected>Reject</option>
                          @else
                            <option value="1" selected>Approve</option>
                            <option value="0">Reject</option>
                          @endif
                        </select>
											</div>
											@error('address')
													<div class="text-danger text-sm">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-12 p-t-20 text-center">
											<button type="submit"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
										</div>
									</div>
								</form>
                @endforeach

							</div>
						</div>
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