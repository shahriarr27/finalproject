<div class="sidebar-container">
  <div class="sidemenu-container navbar-collapse collapse fixed-menu">
     <div id="remove-scroll" class="left-sidemenu">
        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
           data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
           <li class="sidebar-toggler-wrapper hide">
              <div class="sidebar-toggler">
                 <span></span>
              </div>
           </li>
           <li class="sidebar-user-panel">
              <div class="user-panel">
                 <div class="pull-left image">
                    <img src="{{ url('storage/profile_pictures/'.Auth::user()->profile_picture) }}" class="img-circle user-img-circle" alt="User Image" />
                 </div>
                 <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                          Online</span></a>
                 </div>
              </div>
           </li>

           <li class="nav-item start {{ (request()->path() == 'dashboard') ? 'active' : '' }}">
              <a href="/dashboard" class="nav-link ">
                 <i class="material-icons">dashboard</i>
                 <span class="title">Dashboard</span>
                 <span class="selected"></span>
              </a>
           </li>
           <li class="nav-item  {{ (request()->path() == 'schedule/create' || request()->path() == 'schedule' || request()->path() == '1-1schedule' || request()->path() == '1-2schedule') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"><i class="material-icons">event</i>
                 <span class="title">Class Schedules</span><span class="arrow"></span></a>
              <ul class="sub-menu">
                  @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                     <li class="nav-item {{ (request()->path() == 'schedule/create') ? 'active' : '' }}">
                        <a href="{{route('schedule.create')}}" class="nav-link "> <span class="title">Create Schedule</span>
                        </a>
                     </li>
                 @endif
                 @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher' || (Auth::user()->student_year == '1st Year' && Auth::user()->student_semester == '1st Semester'))
                 <li class="nav-item {{ (request()->path() == '1-1schedule') ? 'active' : '' }}">
                    <a href="{{route('1-1schedule')}}" class="nav-link "> <span class="title">1st Year 1st Semester</span>
                    </a>
                 </li>
                 @endif
                 
                 @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher' || (Auth::user()->student_year == '1st Year' && Auth::user()->student_semester == '2nd Semester'))
                 <li class="nav-item {{ (request()->path() == '1-2schedule') ? 'active' : '' }}">
                    <a href="{{route('1-2schedule')}}" class="nav-link "> <span class="title">1st Year 2nd Semester</span>
                    </a>
                 </li>
                 @endif
                 @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'teacher')
                 <li class="nav-item {{ (request()->path() == 'schedule') ? 'active' : '' }}">
                    <a href="{{route('schedule.index')}}" class="nav-link "> <span class="title">All Schedule</span>
                    </a>
                 </li>
                 @endif
              </ul>
           </li>
           @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'staff' || Auth::user()->reg_type == 'teacher')
           <li class="nav-item {{ (request()->path() == 'room') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">meeting_room</i>
                 <span class="title">Room Allocation</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item {{ (request()->path() == 'room') ? 'active' : '' }}">
                    <a href="{{route('room.index')}}" class="nav-link "> <span class="title">View Table</span>
                    </a>
                 </li>
              </ul>
           </li>
           @endif
           <li class="nav-item {{ (request()->path() == 'courses' || request()->path() == 'courses/create') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                 <span class="title">Courses</span> <span class="arrow"></span>
                 {{-- <span class="label label-rouded label-menu label-success">new</span> --}}
              </a>
              <ul class="sub-menu">
                 <li class="nav-item {{ (request()->path() == 'courses') ? 'active' : '' }}">
                    <a href="{{route('courses.index')}}" class="nav-link "> <span class="title">All
                          Courses</span>
                    </a>
                 </li>
                 @if (Auth::user()->admin_role == 'super_admin' || Auth::user()->reg_type == 'staff')
                  <li class="nav-item {{ (request()->path() == 'courses/create') ? 'active' : '' }}">
                     <a href="{{route('courses.create')}}" class="nav-link "> <span class="title">Add
                           Course</span>
                     </a>
                  </li>
                 @endif
              </ul>
           </li>
           <li class="nav-item {{ (request()->path() == 'teachers') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                 <span class="title">Professors</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item {{ (request()->path() == 'teachers') ? 'active' : '' }}">
                    <a href="/teachers" class="nav-link "> <span class="title">All
                          Professors</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item {{ (request()->path() == 'student') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                 <span class="title">Students</span><span class="arrow"></span></a>
              <ul class="sub-menu">
                 <li class="nav-item {{ (request()->path() == 'student') ? 'active' : '' }}">
                    <a href="{{route('student.index')}}" class="nav-link "> <span class="title">All
                          Students</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item {{ (request()->path() == 'staffs') ? 'active' : '' }}">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                 <span class="title">Staff</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item {{ (request()->path() == 'staffs') ? 'active' : '' }}">
                    <a href="/staffs" class="nav-link "> <span class="title">All
                          Staff</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"> <i
                    class="material-icons">assignment</i>
                 <span class="title">Notices</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="#" class="nav-link "> <span class="title">All
                          Notice</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link "> <span class="title">Post
                          Notice</span>
                    </a>
                 </li>
              </ul>
           </li>
        </ul>
     </div>
  </div>
</div>