<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>PMS-AACR</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

	<!--materialize ui-->
<link href="start_project/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="start_project/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="start_project/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="start_project/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="start_project/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="start_project/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="start_project/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="start_project/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="start_project/css/grey.css" rel="stylesheet" type="text/css"/>
<link href="start_project/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="start_project/materialize/css/materialize-stepper.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

	<style>
		.step-content input {
			font-size: 14px;
		}
	</style>
</head>

<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				{{--<img src="homepage__/img/logo-default.png" alt="logo" class="logo-default"/>--}}
				<h3 class="logo-default" style="color: #edecec;"><b> PMS-AACR </b></h3>
			</a>
			<div class="menu-toggler sidebar-toggler fa fa-bars">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->

		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top ">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->

			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					
					<!-- END NOTIFICATION DROPDOWN -->
					
					<!-- BEGIN INBOX DROPDOWN -->
					
					<!-- END INBOX DROPDOWN -->
					
					<!-- BEGIN TODO DROPDOWN -->
					
					<!-- END TODO DROPDOWN -->
					
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle" src="homepage__/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						{{ Auth::user()->name }} </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">

							<li>
								<a href="{{ url('/logout') }}"
								   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<i class="fa fa-key"></i> Log Out </a>

								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>

						</ul>
					</li>
					
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
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse" style="position: fixed">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="start ">
						<a href="#">
							<i class="fa fa-home"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li class="start ">
						<a href="/project_info">
							<i class="fa fa-info-circle"></i>
							<span class="title">Project info</span>
						</a>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->

			<div class="page-content-wrapper">
				<div class="page-content">

					<!-- END PAGE HEADER-->
					<!-- BEGIN PAGE CONTENT-->
					<div class="row">
						<div class="col-md-12">
							<h3>  Starting new Project </h3> <br/>
									<div class="row">
										<div class="col-md-12" id="new_inventory">
											<div class="card portlet" style="padding: 10px">
												<form action="{{url('/create_project')}}" method="POST">
													{{csrf_field()}}
														<div class="step-content" style="left: 0%; display: block;">
															<div class="row">
																<div class="col-md-8">
																	<div class="row">
																		<div class="input-field col s6">
																			<h4>Project Name </h4>
																			<input id="name" name="Project_name" class="validate valid" aria-required="true" aria-invalid="false" type="text" required>
																			<!--<label for="name" class="active"> <h5>Inventory Name</h5></label>-->
																		</div>
																	</div>
																	<div class="row">
																		<div class="input-field col s4">
																			<h4>From </h4>
																			<input id="name" name="From" class="validate valid" aria-required="true" aria-invalid="false" type="text" required>
																			<!--<label for="name" class="active"> <h5>Inventory Name</h5></label>-->
																		</div>
																		<div class="input-field col s4">
																			<h4> To </h4>
																			<input id="name" name="To" class="validate valid" aria-required="true" aria-invalid="false" type="text" required>
																			<!--<label for="name" class="active"> <h5>Inventory Name</h5></label>-->
																		</div>
																		<div class="input-field col s4">
																			<h4> Total Distance (m) </h4>
																			<input id="name" name="Total_Distance" class="validate valid" aria-required="true" aria-invalid="false" type="number">
																			<!--<label for="name" class="active"> <h5>Inventory Name</h5></label>-->
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<br/><br/><br/><br/><br/><br/>
																	<input type="submit" class="btn right btn-large" value="Create Project"/>
																</div>
															</div>
														</div>
												</form>
											</div>
										</div >
									</div>
						</div>
					</div>
					<!-- END PAGE CONTENT-->
				</div>
			</div>

		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
		</div>
		<div class="scroll-to-top">
			<i class="fa fa-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

<!--materialize JS-->


<![endif]-->
<script src="start_project/js/jquery.min.js" type="text/javascript"></script>
<script src="start_project/materialize/js/materialize.min.js"></script>
<script src="start_project/materialize/js/materialize-stepper.js"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="start_project/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="start_project/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="start_project/js/bootstrap.min.js" type="text/javascript"></script>
<script src="start_project/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="start_project/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="start_project/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="start_project/js/metronic.js" type="text/javascript"></script>
<script src="start_project/js/layout.js" type="text/javascript"></script>
<script src="start_project/js/demo.js" type="text/javascript"></script>
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
      });
   </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>