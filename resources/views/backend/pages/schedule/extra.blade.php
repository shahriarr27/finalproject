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

                <div class='centered'>
                    <div id='schedule'>
                        <div class='s-legend'>
                            <div class='s-cell s-head-info'>
                                <div class='s-name'>TT</div>
                            </div>
                            <div class='s-week-day s-cell'>
                                <div class='s-day'>Mon</div>
                            </div>
                            <div class='s-week-day s-cell'>
                                <div class='s-day'>Tue</div>
                            </div>
                            <div class='s-week-day s-cell'>
                                <div class='s-day'>Wed</div>
                            </div>
                            <div class='s-week-day s-cell'>
                                <div class='s-day'>Thu</div>
                            </div>
                            <div class='s-week-day s-cell'>
                                <div class='s-day'>Fri</div>
                            </div>
                        </div>
                        <div class='s-container s-block'>
                            <div class='s-head-info'>
                                <div class='s-head-hour'>
                                    <div class='s-number'>0</div>
                                    <div class='s-hourly-interval'>7.10-7.55</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>1</div>
                                    <div class='s-hourly-interval'>8.00 - 8.45</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>2</div>
                                    <div class='s-hourly-interval'>8.50 - 9.35</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>3</div>
                                    <div class='s-hourly-interval'>9.45 - 10.30</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>4</div>
                                    <div class='s-hourly-interval'>10.50 - 11.35</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>5</div>
                                    <div class='s-hourly-interval'>11.45 - 12.30</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>6</div>
                                    <div class='s-hourly-interval'>12.50 - 13.35</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>7</div>
                                    <div class='s-hourly-interval'>13.45 - 14.30</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>8</div>
                                    <div class='s-hourly-interval'>14.35 - 15.20</div>
                                </div>
                                <div class='s-head-hour'>
                                    <div class='s-number'>9</div>
                                    <div class='s-hourly-interval'>15.25 - 16.10</div>
                                </div>
                            </div>
                            <div class='s-rows-container'>
                                <div class='s-activities'>
                                    <div class='s-act-row'>
                                        <div class='s-act-tab green' data-hours='7.32-8.45'>
                                            <div class='s-act-name'>English</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>A. Rygulska</div>
                                                <div class='s-act-room'>105</div>
                                                <div class='s-act-group'>G1</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab orange' data-hours='9.45-12.50'>
                                            <div class='s-act-name'>Math</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab green' data-hours='13.45-14.30'>
                                            <div class='s-act-name'>Math</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='s-act-row'>
                                        <div class='s-act-tab blue' data-hours='8.50-9.35'>
                                            <div class='s-act-name'>Exam</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>A. Rygulska</div>
                                                <div class='s-act-room'>105</div>
                                                <div class='s-act-group'>G1</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab black' data-hours='10.50-11.35'>
                                            <div class='s-act-name'>Math</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab orange' data-hours='14.15-15.20'>
                                            <div class='s-act-name'>Fitness</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='s-act-row'></div>
                                    <div class='s-act-row'>
                                        <div class='s-act-tab blue' data-hours='7.10-7.55'>
                                            <div class='s-act-name'>English</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>A. Rygulska</div>
                                                <div class='s-act-room'>105</div>
                                                <div class='s-act-group'>G1</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab red' data-hours='8.23-9.35'>
                                            <div class='s-act-name'>Deutsch</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                        <div class='s-act-tab pink' data-hours='15.05-16.10'>
                                            <div class='s-act-name'>Bio</div>
                                            <div class='s-wrapper'>
                                                <div class='s-act-teacher'>D. Kozlowicz</div>
                                                <div class='s-act-room'>121</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='s-act-row'></div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
                                <div class='s-row s-hour-row'>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                    <div class='s-hour-wrapper s-cell'>
                                        <div class='s-half-hour'></div>
                                        <div class='s-half-hour'></div>
                                    </div>
                                </div>
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
