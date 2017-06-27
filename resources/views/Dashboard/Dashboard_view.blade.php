<?php

    $Project_Id = $selected_project_->Project_Id;
    $Project_Name = $selected_project_->Project_Name;
    $From = $selected_project_->From;
    $To = $selected_project_->To;
    $Distance = $selected_project_->Distance;

    $Sections = $Pavement_section_;

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
    <link href="homepage__/css/material.min.css" rel="stylesheet" type="text/css"/>
    <link href="homepage__/materialize/css/dataTables.material.min.css" rel="stylesheet" type="text/css"/>
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
    <style>
         .modal-content input {
            font-size: 14px;
        }

          .dataTables_filter label {
              line-height: 0px;
          }

         .modal-content input {
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
            <div class="page-sidebar navbar-collapse" style="position: fixed;">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="start ">
                        <a href="/dashboard">
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
                <div class="pate-title">
                    <h3>
                        Dashboard <small> reports and statics </small>
                    </h3>

                </div>

                <div class="page-bar">
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->

                <div id="Main-Content">
                    <div class="row">
                        <div class="col-md-12 card portlet" style="padding: 15px;">

                            <div class="col-md-4">
                                <h4><b>Project Name : </b> {{ $Project_Name }}</h4>
                            </div>

                            <div class="col-md-4">
                                <h4><b> From: </b> {{ $From }} <b> To: </b> {{$To}} </h4>
                            </div>

                            <div class="col-md-4">
                                <h4><b> Distance: </b> {{ $Distance }} meteres </h4>
                            </div>

                            <div class="col-md-4">
                                <h4><b> Sections: </b>  {{$Sections->count()}} </h4>
                            </div>

                            <div class="col-md-2 right">
                                <a href="{{ url('/Change_project') }}"
                                   onclick="event.preventDefault();document.getElementById('change_project').submit();">
                                    <i class="fa fa-pencil-square-o"></i> Change Project </a>

                                <form id="change_project" action="{{ url('/Change_project') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="Project_Id" value="{{$Project_Id}}">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portlet light bordered col-md-7">
                            <div class="portlet-title">
                                <div class="caption">
                                    Sections
                                </div>
                                <div class="actions" id="append">

                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="" style=" overflow: hidden; width: auto;">

                                    <!--Content of databale I pasted -->

                                    <table id="example" class="mdl-data-table" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Section Name</th>
                                            {{--<th>From</th>--}}
                                            {{--<th>To</th>--}}
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         @if(! empty($Sections[0]))
                                            @foreach( $Sections as $section )
                                                <tr>
                                                    <td>AARR-00{{$section->Section_Id}}</td>
                                                    <td>{{$section->Section_Name}}</td>
                                                    {{--<td>{{$section->From}}</td>--}}
                                                    {{--<td>{{$section->To}}</td>--}}
                                                    <td>
                                                        <button class="btn green" onclick="event.preventDefault();
                                                     document.getElementById('{{"open".$section->Section_Id}}').submit();"> Open  </button>

                                                        <form id="{{"open".$section->Section_Id}}" action="{{ url('/Open_section') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="Section_Id_open" value="{{$section->Section_Id}}">
                                                        </form>

                                                        <button class="btn red btn-sm" onclick="event.preventDefault();
                                                     document.getElementById('{{"delete".$section->Section_Id}}').submit();"> Delete  </button>

                                                        <form id="{{"delete".$section->Section_Id}}" action="{{ url('/Delete_section') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="Section_Id_open" value="{{$section->Section_Id}}">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                    <!--End of databale i pasted-->

                                </div>

                                <div>
                                    <!--pop up form -->
                                    <div>
                                        <button class="waves-effect waves-light btn modal-trigger" data-target="modal1" href="#modal1"> Add Section </button>
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12 ajax" id="add_section" type="POST" action="{{ url('/add_section') }}">
                                                        {{csrf_field()}}
                                                        <div class="row modal-form-row">
                                                            {{--<div class="col s4">--}}
                                                                {{--<label for="image_url"> <b>Section Name</b> </label>--}}
                                                                {{--<input name="Section_name" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">--}}
                                                            {{--</div>--}}
                                                            <div class="col s4">
                                                                <label for="image_url">From </label>
                                                                <input name="Sec_From" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">
                                                            </div>
                                                            <div class="col s4">
                                                                <label for="image_url">To </label>
                                                                <input name="Sec_To" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <div class="row">
                                                            <div class="col s3">
                                                                <label for="image_url">Surface </label>
                                                                <select class="browser-default" name="Surface" required>
                                                                    <option value="Asphalt_Concrete" selected>Asphalt Concrete</option>
                                                                    <option value="Port_land_cement">Port land cement</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label>Length (m) </label>
                                                                <input id="length" value="{{0}}" name="Length" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url">Carriadge Width (m)</label>
                                                                <input id="C_width" value="{{0}}" name="Carriadge_Width" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url"> Area </label>
                                                                <input id="Area" name="Area" value="{{0}}" class="validate valid" required aria-required="true" aria-invalid="false" type="text" readonly>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <div class="row">
                                                            <div class="col s3">
                                                                <label for="image_url"> Street Type </label>
                                                                <select class="browser-default" name="street_type" required>
                                                                    <option value="" disabled selected></option>
                                                                    <option value="RR">RR</option>
                                                                    <option value="PAS">PAS</option>
                                                                    <option value="SAS">SAS</option>
                                                                    <option value="C">C</option>
                                                                    <option value="L">L</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url">Direction</label>
                                                                <select class="browser-default" name="Direction" required>
                                                                    <option value="" disabled selected></option>
                                                                    <option value="East_bound">East bound</option>
                                                                    <option value="West_bound">West bound</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url">Carriage way type</label>
                                                                <select class="browser-default" name="Carriage_way_type" required>
                                                                    <option value="" disabled selected></option>
                                                                    <option value="Existing_asphalt">Existing asphalt</option>
                                                                    <option value="Gravel">Gravel</option>
                                                                    <option value="New_Asphalt">New Asphalt</option>
                                                                    <option value="New_Cobel">New Cobel</option>
                                                                    <option value="Care_Stone">Care Stone</option>
                                                                    <option value="Under_construction">Under construction</option>
                                                                    <option value="Planned">Planned</option>
                                                                    <option value="Earth">Earth</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url"> Number of Lane </label>
                                                                <input name="No_of_Lane" value="{{0}}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn right"> Submit </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div>
                            {{--<h1> prioritization </h1>--}}
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
<script src="homepage__/materialize/js/materialize.js"></script>
<script src="homepage__/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="homepage__/js/dataTables.material.min.js" type="text/javascript"></script>

<script>
//    $(document).ready(function(){
//        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
//    });

    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features

        $('#example').DataTable( {
            "pageLength": 3,
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        } );

        $('#example_length').hide();
        $('.mdl-grid').first().hide();
        $('#example_filter').appendTo('#append');

        $('.modal').modal();


        $('form.ajax').submit(function(e){
            e.preventDefault();

            $('#modal1').modal('close');

            var registerForm = $("#add_section");
            var formData = registerForm.serialize();

            $.ajax({
                type     : "POST",
                url      : '/add_section',
                data     : formData,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Successfully Added', 4000, 'blue darken-4');
                    window.location.reload(true);
                }
            });
        });

        $('#length').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val() );

        });

        $('#C_width').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val());

        });



    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>