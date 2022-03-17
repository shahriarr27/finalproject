<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Smart University | Dashboard</title>

	{{-- App style --}}
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- google font -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('../assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--bootstrap -->
	<link href="{{asset('../assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css')}}"/>
	<link href="{{asset('../assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- data tables -->
	<link href="{{asset('../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
		type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('../assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('../assets/css/material_style.css')}}">
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css')}}">
	<!-- inbox style -->
	<link href="{{asset('../assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- full calendar -->
	<link href='{{asset('../assets/plugins/fullcalendar/packages/core/main.min.css')}}' rel='stylesheet' />
	<link href='{{asset('../assets/plugins/fullcalendar/packages/daygrid/main.min.css')}}' rel='stylesheet' />
	<link href='{{asset('../assets/plugins/fullcalendar/packages/timegrid/main.min.css')}}' rel='stylesheet' />
	<link href='{{asset('../assets/css/pages/fullcalendar.css')}}' rel='stylesheet' />
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="{{asset('../assets/plugins/flatpicker/css/flatpickr.min.css')}}" />
	<!-- Theme Styles -->
	<link href="{{asset('../assets/css/pages/extra_pages.css')}}" rel="stylesheet">
	<link href="{{asset('../assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('../assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('../assets/css/custom_style.css')}}" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="{{asset('../assets/plugins/dropzone/dropzone.css')}}" rel="stylesheet" media="screen">
	<!-- Jquery Toast css -->
	<link rel="stylesheet" href="{{asset('../assets/plugins/jquery-toast/dist/jquery.toast.min.css')}}">

	@livewireStyles

	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('../assets/img/logo-2.png')}}" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">


   @yield('content')


	<!-- start js include path -->
	<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
	</script>
	<script src="{{asset('../assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/popper/popper.js')}}"></script>
	<script src="{{asset('../assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('../assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('../assets/js/pages/sparkline/sparkline-data.js')}}"></script>
	<script src="{{asset('../assets/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('../assets/plugins/flatpicker/js/flatpicker.min.js')}}"></script>
	<!-- calendar -->
	<script src='{{asset('../assets/plugins/fullcalendar/packages/core/main.min.js')}}'></script>
	<script src='{{asset('../assets/plugins/fullcalendar/packages/interaction/main.min.js')}}'></script>
	<script src='{{asset('../assets/plugins/fullcalendar/packages/daygrid/main.min.js')}}'></script>
	<script src='{{asset('../assets/plugins/fullcalendar/packages/timegrid/main.min.js')}}'></script>
	<script src="{{asset('../assets/js/pages/calendar/calendar.min.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('../assets/js/app.js')}}"></script>
	<script src="{{asset('../assets/js/layout.js')}}"></script>
	<script src="{{asset('../assets/js/theme-color.js')}}"></script>
	<script src="{{asset('../assets/js/pages/material-select/getmdl-select.js')}}"></script>
	<!-- material -->
	<script src="{{asset('../assets/plugins/material/material.min.js')}}"></script>
	<script src="{{asset('../assets/js/pages/material-select/getmdl-select.js')}}"></script>
	<script src="{{asset('../assets/plugins/flatpicker/js/flatpicker.min.js')}}"></script>
	<script src="{{asset('../assets/js/pages/date-time/date-time.init.js')}}"></script>
	<!--apex chart-->
	<script src="{{asset('../assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('../assets/js/pages/chart/chartjs/home-data.js')}}"></script>
	<!-- summernote -->
	<script src="{{asset('../assets/plugins/summernote/summernote.js')}}"></script>
	<!-- dropzone -->
	<script src="{{asset('../assets/plugins/dropzone/dropzone.js')}}"></script>
	<script src="{{asset('../assets/plugins/dropzone/dropzone-call.js')}}"></script>
	<!-- data tables -->
	<script src="{{asset('../assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('../assets/js/pages/table/table_data.js')}}"></script>
	<!-- notifications -->
	<script src="{{asset('../assets/plugins/jquery-toast/dist/jquery.toast.min.js')}}"></script>
	<script src="{{asset('../assets/plugins/jquery-toast/dist/toast.js')}}"></script>
	<script src="{{asset('https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js')}}"></script>
	@livewireScripts
	<script src="{{asset('../assets/js/myscripts.js')}}"></script>
	<script src="{{asset('../assets/js/newscripts.js')}}"></script>
	<!-- end js include path -->
	<!-- end js include path -->
</body>
</html>