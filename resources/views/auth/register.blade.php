@extends('backend.back_layouts.assets')

@section('content')

<div class="limiter log-reg-form">
    <div class="container-login100 page-background">
        {{-- @if($errors->any())
            <div class="error-wrapper">
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p>{{ $error }}</p>
                        <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif --}}
        <div class="wrap-login100 wrap-register">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <span class="login100-form-logo">
                    <a href="/">
                        <img alt="" src="../assets/img/logo-2.png">
                    </a>
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                    Registration
                </span>
                <div class="row">
                    <div class="col-lg-6  p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="firstname"
                                value="{{ old('name') }}" placeholder="Firstname">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        @error('firstname')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6  p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="lastname"
                                value="{{ old('name') }}" placeholder="Lastname">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        @error('lastname')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="name" value="{{ old('name') }}"
                                placeholder="Certificate name">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        @error('name')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <input class="input100" type="email" name="email"
                                value="{{ old('email') }}" placeholder="Email">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        @error('email')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password"
                                :value="__('Password')">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        @error('password')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter password again">
                            <input class="input100" type="password" name="password_confirmation"
                                placeholder="Confirm password" :value="__('Confirm Password')">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        @error('password_confirmation')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="date" id="dateOfBirth" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" placeholder="Birth Date">
                            <span class="focus-input100" data-placeholder="&#x1F4C5;"></span>
                        </div>
                        @error('date_of_birth')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" id="address" name="address"
                                value="{{ old('address') }}" placeholder="Address">
                            <span class="focus-input100" data-placeholder="&#9963;"></span>
                        </div>
                        @error('address')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="tel" id="text5" name="mobile"
                                value="{{ old('mobile') }}" placeholder="Mobile">
                            <span class="focus-input100" data-placeholder="&#9742;"></span>
                            {{-- pattern="[0-9]{3}-[0-9]{8}" --}}
                        </div>
                        @error('mobile')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="file-upload">
                            <div class="file-upload-select">
                                <div class="icon-upload"><i class="fas fa-file-image"></i></div>
                                <div class="file-select-name">Upload profile image...</div>
                                <input type="file" name="profile_picture" id="file-upload-input">
                            </div>
                        </div>
                        @error('profile_picture')
                            <div class="text-danger text-sm" style="margin-top: 10px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <label class="text-white text-sm" style="display: flex; align-items:center">
                            <i class="zmdi zmdi-assignment-account"
                                style="font-size:20px; margin: 0px 10px 0px 5px"></i> Gender</label>
                        <select class="select-type" name="gender">
                            <option value=" "{{ old('gender') == '' ? 'selected' : '' }}>Select gender</option>
                            <option value="male"{{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female"{{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger text-sm" style="margin-top: -10px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6  p-t-5">
                        <label class="text-white text-sm" style="display: flex; align-items:center">
                            <i class="zmdi zmdi-assignment-account"
                                style="font-size:20px; margin: 0px 10px 0px 5px"></i> Register As</label>
                        <select id="select_type" class="select-type" name="reg_type" onChange="check(this);">
                            <option value=""{{ old('reg_type') == '' ? 'selected' : '' }}>Select option</option>
                            <option value="teacher" {{ old('reg_type') == 'teacher' ? 'selected' : '' }}>Teacher</option>
                            <option value="student" {{ old('reg_type') == 'student' ? 'selected' : '' }}>Student</option>
                            <option value="staff" {{ old('reg_type') == 'staff' ? 'selected' : '' }}>Staff</option>
                            <option value="super_admin" hidden>Super Admin</option>
                        </select>
                        @error('reg_type')
                            <div class="text-danger text-sm" style="margin-top: -10px; margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="teacher_fields" style="display:none;">
                        <div class="row">
                            <div class="col-lg-6 p-t-5">
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" id="designation" name="designation"
                                        value="{{ old('designation') }}" placeholder="Designation">
                                    <span class="focus-input100" data-placeholder="&#x270E;"></span>
                                </div>
                            </div>
                        </div>
                        @error('designation')
                            <div class="text-danger text-sm" style="margin-top: -20px; margin-bottom:10px">Designation is required</div>
                        @enderror
                    </div>
                    <div id="student_fields" style="display:none;">
                        <div class="row">
                            <div class="col-lg-6 p-t-5">
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" id="student_id" name="student_id"
                                        value="{{ old('student_id') }}" placeholder="Student ID">
                                    <span class="focus-input100" data-placeholder="&#x270E;"></span>
                                </div>
                                @error('student_id')
                                    <div class="text-danger text-sm"  style="margin-top: -20px; margin-bottom:20px">Student ID is required</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 p-t-5">
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" id="student_session" name="student_session"
                                        value="{{ old('student_session') }}" placeholder="Session">
                                    <span class="focus-input100" data-placeholder="&#x270E;"></span>
                                </div>
                                @error('student_session')
                                    <div class="text-danger text-sm"  style="margin-top: -20px; margin-bottom:20px">Session is required</div>
                                @enderror
                            </div>
                            
                          <div class="col-lg-6 p-t-5">
                            <label class="text-white text-sm" style="display: flex; align-items:center">
                                <i class="material-icons"
                                    style="font-size:20px; margin: 0px 10px 0px 5px">
                                    view_timeline</i> Year</label>
                            <select class="select-type" name="student_year">
                                <option value="{{old('student_year')}}">Select year</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                            </select>
                            @error('student_year')
                              <div class="text-danger text-sm"  style="margin-top: -10px; margin-bottom:10px">Select a year</div>
                            @enderror
                          </div>
                          <div class="col-lg-6 p-t-5">
                            <label class="text-white text-sm" style="display: flex; align-items:center">
                                <i class="material-icons"
                                    style="font-size:20px; margin: 0px 10px 0px 5px">
                                    view_timeline</i> Semester</label>
                            <select class="select-type" name="student_semester">
                                <option value="{{old('student_semester')}}">Select semester</option>
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                            </select>
                            @error('student_semester')
                              <div class="text-danger text-sm"  style="margin-top: -10px; margin-bottom:10px">Select a semester</div>
                            @enderror
                          </div>
                        </div>
                    </div>

                </div>
                <!-- Validation Errors -->
                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                <div class="container-login100-form-btn mt-4">
                    <button type="submit" class="login100-form-btn">
                        Register
                    </button>
                </div>
                <div class="text-center p-t-30">
                    <a class="txt1 register-link" href="/login">
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
