<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Dashboard</title>

	{{-- App style --}}
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="../assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"/>
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- data tables -->
	<link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- full calendar -->
	<link href='../assets/plugins/fullcalendar/packages/core/main.min.css' rel='stylesheet' />
	<link href='../assets/plugins/fullcalendar/packages/daygrid/main.min.css' rel='stylesheet' />
	<link href='../assets/plugins/fullcalendar/packages/timegrid/main.min.css' rel='stylesheet' />
	<link href='../assets/css/pages/fullcalendar.css' rel='stylesheet' />
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- Theme Styles -->
	<link href="../assets/css/pages/extra_pages.css" rel="stylesheet">
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/custom_style.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Jquery Toast css -->
	<link rel="stylesheet" href="../assets/plugins/jquery-toast/dist/jquery.toast.min.css">

	

	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/img/logo-2.png" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">


   @yield('content')


	<!-- start js include path -->
	<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
	</script>
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>
	<script src="../assets/plugins/moment/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>

	<script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<!-- calendar -->
	<script src='../assets/plugins/fullcalendar/packages/core/main.min.js'></script>
	<script src='../assets/plugins/fullcalendar/packages/interaction/main.min.js'></script>
	<script src='../assets/plugins/fullcalendar/packages/daygrid/main.min.js'></script>
	<script src='../assets/plugins/fullcalendar/packages/timegrid/main.min.js'></script>
	<script src="../assets/js/pages/calendar/calendar.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<!-- material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="../assets/js/pages/date-time/date-time.init.js"></script>
	<!--apex chart-->
	<script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>
	<!-- notifications -->
	<script src="../assets/plugins/jquery-toast/dist/jquery.toast.min.js"></script>
	<script src="../assets/plugins/jquery-toast/dist/toast.js"></script>

	<script src="../assets/js/myscripts.js"></script>
	<!-- end js include path -->
	<!-- end js include path -->
</body>
</html>