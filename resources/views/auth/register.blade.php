@extends('backend.back_layouts.assets')

@section('content')

<div class="limiter log-reg-form">
    <div class="container-login100 page-background">
        @if($errors->any())
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
        @endif
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
                    </div>
                    <div class="col-lg-6  p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="lastname"
                                value="{{ old('name') }}" placeholder="Lastname">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="name" value="{{ old('name') }}"
                                placeholder="Certificate name">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <input class="input100" type="email" name="email"
                                value="{{ old('email') }}" placeholder="Email">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password"
                                :value="__('Password')">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input" data-validate="Enter password again">
                            <input class="input100" type="password" name="password_confirmation"
                                placeholder="Confirm password" :value="__('Confirm Password')">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="date" id="dateOfBirth" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" placeholder="Birth Date">
                            <span class="focus-input100" data-placeholder="&#x1F4C5;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" id="address" name="address"
                                value="{{ old('address') }}" placeholder="Address">
                            <span class="focus-input100" data-placeholder="&#9963;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="tel" id="text5" name="mobile"
                                value="{{ old('mobile') }}" placeholder="Mobile">
                            <span class="focus-input100" data-placeholder="&#9742;"></span>
                            {{-- pattern="[0-9]{3}-[0-9]{8}" --}}
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="file-upload">
                            <div class="file-upload-select">
                                <div class="icon-upload"><i class="fas fa-file-image"></i></div>
                                <div class="file-select-name">Upload profile image...</div>
                                <input type="file" name="profile_picture" id="file-upload-input">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-5">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth select-width"
                            onChange="check(this);">
                            <label for="sample1" class="text-sm text-white mb-2 select-reg"><i
                                    class="zmdi zmdi-assignment-account"></i> Gender</label>
                            <input class="mdl-textfield__input" type="text" id="sample1" name="gender"
                                value="{{ old('gender') }}" readonly tabIndex="-1"
                                placeholder="Select">
                            <label for=" sample2" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            </label>
                            <ul data-mdl-for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item" value="male">Male</li>
                                <li class="mdl-menu__item" value="female">Female</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  p-t-5">
                        <label class="text-white text-sm" style="display: flex; align-items:center">
                            <i class="zmdi zmdi-assignment-account"
                                style="font-size:20px; margin: 0px 10px 0px 5px"></i> Register As</label>
                        <select id="select-type" name="reg_type" onChange="check(this);">
                            <option value="{{old('reg_type')}}">Select option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                        </select>
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
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 p-t-5">
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" id="student_session" name="student_session"
                                        value="{{ old('student_session') }}" placeholder="Session">
                                    <span class="focus-input100" data-placeholder="&#x270E;"></span>
                                </div>
                                @error('student_session')
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Validation Errors -->
                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                <div class="container-login100-form-btn">
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
