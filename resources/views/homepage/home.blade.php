<?php



?>

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
<link href="homepage__/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="homepage__/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="homepage__/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="homepage__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="homepage__/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="homepage__/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="homepage__/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="homepage__/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="homepage__/css/grey.css" rel="stylesheet" type="text/css"/>
<link href="homepage__/css/custom.css" rel="stylesheet" type="text/css"/>

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
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
			<div class="page-sidebar navbar-collapse" style="position: fixed;">
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
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<h3 class="page-title">
				</h3>
				<div class="page-bar">
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						 <h2> Welcome to Addis Ababa City Roads Pavement Management System </h2>
						{{--<h1> Lorem ipsum dolor simet el </h1>--}}
					</div>
				</div>
				<div class="row">
					<br/><br/>
					<div class="col-md-12" >
						<div class="col-md-4"></div>
						<div class="col-md-2">
							<a href="/start_project_"><button class="btn waves-effect waves-light" type="submit" name="action"> <i class="fa fa-plus-circle"></i>  Start a project  </button></a>
						</div>
						<div class="col-md-1"></div>
					</div>
					<br/><br/><br/><br/>
				</div>
				<hr/>
				<div id="recent projects">
					<div class="row">
						<h4 class="col-md-4">
							Existing projects
						</h4>
					</div>

					<div class="row">
						<div class="col-md-12">
							<table class="table container" border="4">
								<thead class="thead-default">
									<tr class="row">
										@if(! empty($projects))
											<td> <h4> {{$projects->count()}} projects </h4> </td>
										@else
											<td> <h4> 0 projects </h4> </td>
										@endif
									</tr>
								</thead>
								@if(! empty($projects))
									@foreach( $projects as $project )
										<tr class="row">
											<td class="col-md-3"> {{$project->Project_Name}} </td>
											<td class="col-md-3"> {{$project->From}} </td>
											<td class="col-md-3"> {{$project->To}} </td>
											<td class="col-md-3">
												<li class="dropdown dropdown-user" style="list-style: none;">
													<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-default">
														<li>
															<a href="{{ url('/Open_project') }}"
															   onclick="event.preventDefault();document.getElementById('{{"open".$project->Project_Id}}').submit();">
																<i class="fa fa-key"></i> Open </a>

															<form id="{{"open".$project->Project_Id}}" action="{{ url('/Open_project') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
																<input type="hidden" name="Project_Id_open" value="{{$project->Project_Id}}">
															</form>

														</li>

														<li>
															<a href="{{ url('/Delete_project') }}"
															   onclick="event.preventDefault();document.getElementById('{{"delete".$project->Project_Id}}').submit();">
																<i class="fa fa-trash"></i> Delete </a>

															<form id="{{"delete".$project->Project_Id}}" action="{{ url('/Delete_project') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
																<input type="hidden" name="Project_Id_delete" value="{{$project->Project_Id}}">
															</form>

														</li>
													</ul>
												</li>
											</td>
										</tr>
									@endforeach
								@endif
							</table>
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
<script src="homepage__/js/jquery.min.js" type="text/javascript"></script>
<script src="homepage__/materialize/js/materialize.js"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="homepage__/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="homepage__/js/bootstrap.min.js" type="text/javascript"></script>
<script src="homepage__/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="homepage__/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="homepage__/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="homepage__/js/metronic.js" type="text/javascript"></script>
<script src="homepage__/js/layout.js" type="text/javascript"></script>
<script src="homepage__/js/demo.js" type="text/javascript"></script>
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