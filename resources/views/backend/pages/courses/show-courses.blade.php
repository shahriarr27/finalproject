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

                @livewire('course-filter')

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
