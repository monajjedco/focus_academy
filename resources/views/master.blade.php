<!DOCTYPE html>
<html dir="rtl">
  <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Focus Academy | KUN-TASK </title>
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
    <link rel="shortcut icon" href="https://focusacademy.tv/favicon.ico">
<link href="{{ asset('css/tooltips/hint.css') }}" rel="stylesheet">

 		<link href="{{ asset('icon/fa/font-awesome.css') }}" rel="stylesheet" type="text/css" >


		<!-- BEGIN OLD-->
		<link href="{{ asset('css/humanity.calendars.picker.css') }}" rel="stylesheet">
		<script src="{{ asset('assets/global/plugins/jquery.min.js') }}"></script>
 

		<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
 		<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">


		<!-- BEGIN PAGE LEVEL STYLES -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select-rtl.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/select2.css') }}"/>


		<!-- BEGIN THEME STYLES -->
		<link href="{{ asset('assets/global/css/components-rounded-rtl-kufi.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('assets/admin/layout2/css/layout.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('assets/admin/layout2/css/themes/grey.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="{{ asset('assets/admin/layout2/css/custom.css') }}" rel="stylesheet" type="text/css"/>
		
		<!-- ---------------------- STANDERD -------------------- -->


<body dir="ltr" class="page-header-fixed page-container-bg-solid page-sidebar-closed22 page-sidebar-closed-hide-logo page-header-fixed-mobile page-footer-fixed1">
 <!-- BEGIN HEADER page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed-mobile page-footer-fixed1-->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a target="_parent" href="{{ URL::to('home') }}">  

<img class="hidden-xs" border="1" src="{{ asset('img/download1.png') }}" style="margin-top: 0px; margin-bottom: 1px; margin-left: -25px;" width="200" height="68">

			</a>
			<div class="menu-toggler sidebar-toggler"></div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
		
		<!-- END RESPONSIVE MENU TOGGLER --> 

		<!-- BEGIN PAGE TOP -->
		<div class="page-top">

<!----------------------- PER ------------------------->

								<a class="btn btn-lg btn-info" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-top:  11px; margin-right: 5px;"><i class="icon-logout font-red"></i> <span> Log off</span></a>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>							

					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="1000">
					 <!--  page-sidebar-menu page-sidebar-menu-hover-submenu page-sidebar-menu-closed
				 ================== LOGO ================== -->
				<li>
					<a target="_parent" href="{{ URL::to('home') }}"> 
						<span class="title">
							<img class="hidden-xs" border="1" src="{{ asset('img/download2.png') }}" style="margin-top: -20px; margin-bottom: -14px; margin-right: -12px;" width="190" height="150">
						</span>
					</a>
				</li>



				<li><a target="_parent" href="{{ URL::to('all.classes') }}"><i class="icon-calendar font-yellow"></i><h3 class="title"> Classes </h3></a></li>

				<li><a target="_parent" href="{{ URL::to('all.students') }}"><i class="icon-users font-yellow"></i><h3 class="title"> Students </h3></a></li>



				<!-- ================== ADMIN ================== -->
			</ul>
		</div>
	</div>
	<!-- ================== نهاية  القائمة  ================== -->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- ======================== -->	
			
			<!-- ======================== -->
			<!-- ======================== -->
			@yield('content')
			<!-- ======================== -->
		</div>
	</div>
	<!-- END page-content-wrapper -->
</div>
<!-- BEGIN FOOTER -->
<div class="page-footer">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-6 col-sm-4 hidden-xs">
                    <span class="font-yellow Noto14">   All Copyrights </span><a style="text-decoration: none"><span class="font-yellow" > FOCUS Media </span> </a> <span class="font-mute Noto14"> Version   :  1.0</span>
                </div>
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-6 col-sm-4 text-right">
                    <span class="font-yellow">Develop by: <a style="text-decoration: none" href="http://host4arab.net" target="_blank">Ahmad Monajjed</a></span>
                </div>
                <!-- END COPYRIGHT -->
 	<div class="scroll-to-top"><i class="icon-arrow-up"></i></div>
</div>
<!-- END FOOTER -->
		 

	</body>
</html>



 



<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js') }}" type="text/javascript"></script>


<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- STANDERD -->
 


<script src="{{ asset('js/jquery.plugin.js') }}"></script>
<script src="{{ asset('js/jquery.datepick.js') }}"></script>
<script src="{{ asset('js/jquery.calendars.js') }}"></script>
<script src="{{ asset('js/jquery.calendars.plus.js') }}"></script>
<script src="{{ asset('js/jquery.calendars.picker.js') }}"></script>
<script src="{{ asset('js/jquery.calendars.ummalqura.js') }}"></script>
<script src="{{ asset('js/jquery.calendars.ummalqura-ar.js') }}"></script>

<!-- dropdowns for select2 (ComponentsDropdowns.init)-->
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.min.js') }}"></script>

<script src="{{ asset('table-ese/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<!-- JS dataTables -->
<!-- STANDERD -->
<script src="{{ asset('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout2/scripts/layout.js') }}" type="text/javascript"></script>

 <!-- STANDERD -->
<script>
jQuery(document).ready(function() {
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	Demo.init(); // init demo features
 	ComponentsDropdowns.init();
    Index.initMiniCharts(); // chart for project
    FormSamples.init();
	Todo.init(); // init todo page
	FormiCheck.init(); // init page demo
	Search.init();
	Profile.init(); // init page demo
	Portfolio.init();	
  });
</script>
<!-- END JAVASCRIPTS --> 