
                <div class="row">
                    <div class="card-box">
                      <div class="card-head">
                        <header>All Courses</header>
                        <div class="filters d-block my-3 pl-4">
                          <div class="row">
                            <div class="col-sm-3">
                              <select class="custom-select custom-select-md" wire:model = "selectedYear">
                                <option selected>Select Year</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <select class="custom-select custom-select-md" wire:model = "selectedSemester">
                                <option selected>Select Semester</option>
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body ">
                        <!-- start course list -->
                        <div class="row">
                            @if (is_null($selectedYear))
                                
                                @foreach ($showAll as $courses)
                                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                    <div class="blogThumb">
                                        <div class="thumb-center"><img class="img-responsive" alt="user"
                                            src="{{ url('storage/course_image/'.$courses->course_image) }}" style="width: 100%; height: 130px; object-fit:cover; object-position:center;"></div>
                                        <div class="course-box">
                                        <h4><b>{{$courses->course_title}}</b></h4>
                                        <p><span><i class="ti-alarm-clock"></i> Course Code: {{$courses->course_code}}</span></p>
                                        <p><span><i class="ti-user"></i> Professor: {{$courses->course_teacher}}</span></p>
                                        <p><span><i class="ti-user"></i> Course Credit: {{$courses->course_credit}}</span></p>
                                        <p><span><i class="ti-user"></i> Contact Hours: {{$courses->course_hrs}}hrs</span></p>
                                        <br>
                                        <div class="course-btn">
                                            <a href="courses/{{$courses->id}}" role="button"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">See Details</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                          @endif
                          @if (!is_null($selectedSemester))
                              @foreach ($filterResult as $courseDetails)
                                @if ($courseDetails->course_year == $selectedYear && $courseDetails->course_semester == $selectedSemester)
                                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                    <div class="blogThumb">
                                        <div class="thumb-center"><img class="img-responsive" alt="user"
                                            src="{{ url('storage/course_image/'.$courseDetails->course_image) }}" style="width: 100%; height: 130px; object-fit:cover; object-position:center;"></div>
                                        <div class="course-box">
                                        <h4><b>{{$courseDetails->course_title}}</b></h4>
                                        <p><span><i class="ti-alarm-clock"></i> Course Code: {{$courseDetails->course_code}}</span></p>
                                        <p><span><i class="ti-user"></i> Professor: {{$courseDetails->course_teacher}}</span></p>
                                        <p><span><i class="ti-user"></i> Course Credit: {{$courseDetails->course_credit}}</span></p>
                                        <p><span><i class="ti-user"></i> Contact Hours: {{$courseDetails->course_hrs}}hrs</span></p>
                                        <br>
                                        <div class="course-btn">
                                            <a href="courses/{{$courseDetails->id}}" role="button"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">See Details</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                @endif
                                  
                              @endforeach
                          @endif
                        </div>
                        <!-- End course list -->
                      </div>
                    </div>
                  </div>
