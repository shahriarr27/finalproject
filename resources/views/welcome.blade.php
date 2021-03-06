@extends('backend.back_layouts.assets')
@section('content')
    
	<div class="page-wrapper">

                    <div class="px-4 py-5 text-center">
                        <h1 class="mx-auto"><img class="home-logo" alt="Logo" src="../assets/img/logo-2.png"></h1>
                        <h1 class="display-5 fw-bold mb-3">Smart EEE</h1>
                        <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">This is a demo landing page of <b> Automatic Class Schedule Management System.</b>
                            This system helps to create automatic class schedule by checking various conditions. As like checking previous room allocation, session schedule overlaping, etc.
                        </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg px-4 gap-3">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3">Log in</a>
                    
                                    @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">Register</a>
                                    @endif
                                @endauth
                                @endif
                        </div>
                        </div>
                    </div>
    </div>

@endsection
