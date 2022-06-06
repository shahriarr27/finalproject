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

               @if (session('error'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <p>{{ session('error') }}</p>
                 <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </a>
               </div>
             @endif
                
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
                      @livewire('dropdown')
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
