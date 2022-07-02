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
                    @livewire('student-filter')
                  </div>
                </div>
              </div>
                   
               @else
               <p>No student found!</p>
					
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