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
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf

                <span class="login100-form-logo">
                    <a href="/">
                        <img alt="" src="../assets/img/logo-2.png">
                    </a>
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>
                @if (session()->has('approvalMessage'))
                    <div class="alert alert-warning alert-dismissible fade show w-100" role="alert">
                        <p>{{session()->get('approvalMessage')}}</p>
                        <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                @endif
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="email" class="input100" type="email" placeholder="Email" name="email"
                        value="{{old('email')}}" />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                {{-- remember removed x-input --}}
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password" class="input100" type="password" name="password" placeholder="Password"
                        autocomplete="current-password" />
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input id="remember_me" type="checkbox" class="input-checkbox100" name="remember">
                    <label class="label-checkbox100" for="remember_me">
                        Remember me
                    </label>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
                <div class="text-center p-t-30 mb-2">
                    @if(Route::has('password.request'))
                        <a class="txt1 forget-pass-link underline"
                            href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                </div>
                <div class="text-center p-t-10">
                    <p class="text-white text-sm">Don't have an account?
                        <a class="underline text-sm register-link" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
