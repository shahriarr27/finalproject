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

           <li class="nav-item start active">
              <a href="/dashboard" class="nav-link ">
                 <i class="material-icons">dashboard</i>
                 <span class="title">Dashboard</span>
                 <span class="selected"></span>
              </a>
           </li>
           <li class="nav-item">
              <a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
                 <span class="title">Event Management</span>
              </a>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"><i class="material-icons">event</i>
                 <span class="title">Class Schedules</span><span class="arrow"></span></a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="{{route('schedule.index')}}" class="nav-link "> <span class="title">All Schedule</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{route('schedule.create')}}" class="nav-link "> <span class="title">Create Schedule</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{route('1-1schedule')}}" class="nav-link "> <span class="title">1st Year 1st Semester</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                 <span class="title">Professors</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="/teachers" class="nav-link "> <span class="title">All
                          Professors</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                 <span class="title">Students</span><span class="arrow"></span></a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="{{route('student.index')}}" class="nav-link "> <span class="title">All
                          Students</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                 <span class="title">Courses</span> <span class="arrow"></span>
                 <span class="label label-rouded label-menu label-success">new</span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="{{route('courses.index')}}" class="nav-link "> <span class="title">All
                          Courses</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="courses/create" class="nav-link "> <span class="title">Add
                          Course</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                 <span class="title">Staff</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="/staffs" class="nav-link "> <span class="title">All
                          Staff</span>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link nav-toggle"> <i
                    class="material-icons">airline_seat_individual_suite</i>
                 <span class="title">Holiday</span> <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="all_holidays.html" class="nav-link "> <span class="title">All
                          Holiday</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="add_holiday.html" class="nav-link "> <span class="title">Add
                          Holiday</span>
                    </a>
                 </li>
              </ul>
           </li>
        </ul>
     </div>
  </div>
</div>