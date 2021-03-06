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
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Users</span>
										<span class="info-box-number">{{count($users->where('approval', 1))}}</span>
										<div class="progress">
											<div class="progress-bar" style="width: {{count($users)}}%"></div>
										</div>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Students</span>
										<span class="info-box-number">{{count($users->where('reg_type', 'student')->where('approval', 1))}}</span>
										<div class="progress">
											<div class="progress-bar" style="width: {{count($users->where('reg_type', 'student')->where('approval', 1))}}%"></div>
										</div>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Teachers</span>
										<span class="info-box-number">{{count($users->where('reg_type', 'teacher')->where('approval', 1))}}</span>
										<div class="progress">
											<div class="progress-bar" style="width: {{count($users->where('reg_type', 'teacher')->where('approval', 1))}}%"></div>
										</div>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-danger">
									<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Staff</span>
										<span class="info-box-number">{{count($users->where('reg_type', 'staff')->where('approval', 1))}}</span>
										<div class="progress">
											<div class="progress-bar" style="width: {{count($users->where('reg_type', 'staff'))}}%"></div>
										</div>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->

					
					<div class="row">
						<!-- Activity feed start -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Activity Feed</header>
									<button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="feedMenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<ul class="feedBody">
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std1.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
													class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std2.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
													class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std3.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblCommentStyle">comment</span> Lina
												Smith<small class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Hey, How are you??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std4.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
												<small class="text-muted">7 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												I am fine. You??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std5.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
													class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="../assets/img/std/std6.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
													class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Activity feed end -->
					</div>
					<!-- start new student list -->
					@if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'staff')
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>New Users Registration List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>Name</th>
														<th>Reg Type</th>
														<th>Designation / Session</th>
														<th>Date Of Admit</th>
														<th>Registration</th>
														<th>Approve</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($users as $user)
													@if ($user->approval ==0)
														<tr>
															<td><a href="#">{{$user->name}}</a></td>
															<td class="text-capitalize">{{$user->reg_type}}</td>
															<td>@if($user->reg_type == 'teacher')
																	<span>{{$user->designation}}</span>
																	@elseif($user->reg_type == 'student')
																	<span>{{$user->student_session}}</span>
																	@else
																	<span>Staff</span>
																	@endif
															</td>
															<td>{{$user->created_at->format('d/m/Y')}}</td>
															<td>
																@if($user->approval == 0)
																<span class="label label-sm bg-danger">Waiting</span>
																@else
																<span class="label label-sm bg-success">Approved</span>
																@endif
															</td>
															<td>
																	<a href="users/{{$user->id}}/edit" class="" data-bs-toggle="tooltip"
																		title="Approve"><i class="fa fa-check"></i></a>
																		
																	<a href="javascript:void(0)" class="text-inverse" title="Delete"
																		data-bs-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
																	
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
							
					@endif
					<!-- end new student list -->
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
