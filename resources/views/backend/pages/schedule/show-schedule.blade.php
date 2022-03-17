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
                          <header>Class Schedule</header>
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
                          <table class="table table-bordered table-hover bg-light mt-4 class-schedule-table">
                              <thead>
                                  <th class="w-25 text-center">A</th>
                                  <th class="text-center">B</th>
                                  <th class="text-center">C</th>
                                  <th class="text-center">D</th>
                                  <th class="text-center">E</th>
                              </thead>
                              <tbody>
                                  <tr class="text-center">
                                      <td>Saturday</td>
                                      <td>
                                        <div class="class-details">
                                            <p class="ccode">Bangla</p>
                                            <p class="ctime">10:00-11:00</p>
                                            <p class="tname">John Doe</p>
                                            <p class="rno">401</p>
                                        </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="text-center">
                                      <td>Sunday</td>
                                      <td>
                                          <div class="class-details">
                                              <p class="ccode">Bangla</p>
                                              <p class="ctime">10:00-11:00</p>
                                              <p class="tname">John Doe</p>
                                              <p class="rno">401</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="text-center">
                                      <td>Monday</td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Bangla</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="text-center">
                                      <td>Tuesday</td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Bangla</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="text-center">
                                      <td>Wednesday</td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Bangla</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="text-center">
                                      <td>Thursday</td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Bangla</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>English</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Math</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="class-details">
                                              <h4>Physics</h4>
                                              <p>10:00-11:00</p>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>

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
