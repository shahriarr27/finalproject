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
                          <header>Room Allocation Table</header>
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
                              <div class="btn-group show">
                                <a href="{{route('schedule.create')}}" id="addRow"
                                  class="btn btn-info">
                                  Add New <i class="fa fa-plus"></i>
                                </a>
                              </div>
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
                                  <th class="text-center text-uppercase">Day</th>
                                </thead>
                                <tbody>
                                  {{-- <p>{{$schedules}}</p> --}}
                                  <tr>
                                    <td class="text-center text-uppercase text-danger" style="min-width: 150px"><strong>SUN<strong></td>
                                        <td>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">401</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == '401' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">402</p>
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == '402' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">411</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == '411' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">413</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == '413' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">414</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == '414' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-01</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == 'Lab-01' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                          <div style="display: flex">
                                            <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-02</p> 
                                            @foreach ($sc_room as $room => $sroom)
                                              @foreach ($sroom as $item)
                                                @if ($item->schedule_room == 'Lab-02' && $item->schedule_day == 'sun')
                                                  <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                  @else
                                                @endif
                                              @endforeach
                                            @endforeach
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger" style="min-width: 150px"><strong>MON<strong></td>
                                      <td>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">401</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '401' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">402</p>
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '402' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">411</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '411' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">413</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '413' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">414</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '414' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-01</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-01' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-02</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-02' && $item->schedule_day == 'mon')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @else
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger"><strong>TUE<strong></td>
                                      <td>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">401</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '401' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">402</p>
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '402' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">411</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '411' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">413</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '413' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">414</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '414' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-01</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-01' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-02</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-02' && $item->schedule_day == 'tue')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @else
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger" style="min-width: 150px"><strong>WED<strong></td>
                                      <td>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">401</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '401' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">402</p>
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '402' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">411</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '411' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">413</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '413' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">414</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '414' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-01</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-01' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-02</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-02' && $item->schedule_day == 'wed')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @else
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center text-uppercase text-danger" style="min-width: 150px"><strong>THR<strong></td>
                                      <td>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">401</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '401' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">402</p>
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '402' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">411</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '411' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">413</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '413' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">414</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == '414' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-01</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-01' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                        <div style="display: flex">
                                          <p class="mr-2" style="min-width:70px;border-right: 1px solid gray;">Lab-02</p> 
                                          @foreach ($sc_room as $room => $sroom)
                                            @foreach ($sroom as $item)
                                              @if ($item->schedule_room == 'Lab-02' && $item->schedule_day == 'thr')
                                                <span class="times font-bold px-2 text-danger" style="border-right: 1px solid gray;">{{ date('g:i A', strtotime($item->startTime)). ' - ' .date('g:i A', strtotime($item->endTime))}}</span>
                                                @else
                                              @endif
                                            @endforeach
                                          @endforeach
                                        </div>
                                    </td>
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
