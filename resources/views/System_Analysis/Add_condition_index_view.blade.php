<?php
    $Section_Id = $Pavement_section_->Section_Id;
    $Section_Name = $Pavement_section_->Section_Name;
    $From = $Pavement_section_->From;
    $To = $Pavement_section_->To;
    $length = $Pavement_section_->Length;
    $Surface = $Pavement_section_->Surface;
    $Carriage_width = $Pavement_section_->Carriage_width;
    $Number_of_lane = $Pavement_section_->Number_of_lane;
    $Area = $Pavement_section_->Area;
    $Street_type = $Pavement_section_->Street_type;
    $Direction = $Pavement_section_->Direction;
    $Carriage_way_type = $Pavement_section_->Carriage_way_type;
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

         .input-field input {
             font-size: 14px;
         }

         .sub-menu{
             background-color: #0d1217;
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
                        <a href="/Section_dashboard">
                            <i class="fa fa-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="start">
                        <a>
                            <i class="fa fa-cogs"></i>
                            <span class="title">System Analysis</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/add_condition_index">
                                    <i class="fa fa-add"></i>
                                    Add new Inspeciton </a>
                            </li>
                            <li>
                                <a href="/density_deduct_values">
                                    <i class=""></i>
                                    Density and Deduct value</a>
                            </li>
                            <li>
                                <a href="/distress_Identification">
                                    <i class=""></i>
                                    Distress identification view</a>
                            </li>
                        </ul>
                    </li>
                    <li class="start ">
                        <a href="/Cost_Analysis_input_view">
                            <i class="fa fa-money"></i>
                            <span class="title">Cost</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="index.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/Treatment_Recommendation">
                                    <i class="fa fa-add"></i>
                                    Treament Recommendation </a>
                            </li>
                            <li>
                                <a href="/Maintainance_and_Rehablitation_plan">
                                    <i class=""></i>
                                    Maintenace and rehab plan </a>
                            </li>
                            <li>
                                <a href="/rehablitation_alternatives">
                                    <i class=""></i>
                                    Rehabilitation Alternatives</a>
                            </li>
                            <li>
                                <a href="/Life_Cycle_Cost_Analysis">
                                    <i class=""></i>
                                    Life Cycle Cost Analysis</a>
                            </li>
                        </ul>
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
                <h3 class="page-title">
                    Section : {{ $Section_Name }}
                </h3>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->

                <div id="Main-Content">
                    <div class="row">
                        <div class="col-md-12 light portlet" style="padding: 8px;">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5><b > From: </b> {{ $From }} <br/>
                                        <b> To: </b> {{$To}} </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5><b> Length :</b> {{ $length  }} <small>meters</small>  </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5><b> Surface :</b> {{ $Surface  }}  </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5><b> Area : </b> {{ $Area  }} <small>m2</small>  </h5>
                                </div>
                                <div class="col-md-2">
                                      <h5>  <b> Street Type :</b> {{$Street_type}} </h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <form method="POST" action="{{url('/add_condition_index_post') }}" class="validate" >
                    {{csrf_field()}}
                        <input type="hidden" value="{{uniqid()}}" name="Inspection_Id">

                        <input type="hidden" value="{{$Section_Id}}" name="Section_Id">

                        {{--Begining of first row form--}}
                        <div class="row">
                            <div class="col-md-3">
                                <h5>1. Alligatory Cracking</h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="alligatory_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="alligatory_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="alligatory_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>2. Bleeding </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bleeding_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bleeding_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bleeding_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>3. Block Cracking </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="block_cracking_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="block_cracking_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="block_cracking_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>4. Bumps/ Sags </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bumps_sags_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bumps_sags_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="bumps_sags_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                            {{--End of first row form--}}

                        {{--Begining of second row form--}}
                        <div class="row">
                            <div class="col-md-3">
                                <h5>5. Corrugation </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="corrugation_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="corrugation_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="corrugation_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>6. Depression </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="depression_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="depression_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="depression_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>7. Edge Cracking </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="edge_cracking_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="edge_cracking_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="edge_cracking_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5> 8. Joint refelection cracking </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="joint_ref_cracking_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="joint_ref_cracking_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="joint_ref_cracking_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--End of second row form--}}

                        {{--Begining of Third row form--}}
                        <div class="row">
                            <div class="col-md-3">
                                <h5>9. Lane shoulder drop</h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="Lane_should_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="Lane_should_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="Lane_should_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5> 10. Longtiudnal/ Traverse crack </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="longtd_crack_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="longtd_crack_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="longtd_crack_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>11. Patching </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="patching_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="patching_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="patching_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>12. polished aggregate </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="polished_aggregate_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="polished_aggregate_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="polished_aggregate_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--End of third row form--}}

                        {{--Begining of fourth row form--}}
                        <div class="row">
                            <div class="col-md-3">
                                <h5> 13. Pothole </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="pothole_low" type="number" min="0" step="0.001"  class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="pothole_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="pothole_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>14. Rutting </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="rutting_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="rutting_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="rutting_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>15. Railroad crossing </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="railroad_crossing_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="railroad_crossing_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="railroad_crossing_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>16. Shoving </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="shoving_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="shoving_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="shoving_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--End of fourth row form--}}

                        {{--Begining of fifth row form--}}
                        <div class="row">
                            <div class="col-md-3">
                                <h5>17. Slippage cracking </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="slippage_crack_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="slippage_crack_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="slippage_crack_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>18. Swell </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="swell_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="swell_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="swell_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>19. Raveling </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="raveling_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="raveling_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="raveling_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h5>20. Weathering </h5>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="weathering_low" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">Low</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="weathering_medium" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">medium</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-field">
                                        <input name="weathering_high" type="number" min="0" step="0.001" class="">
                                        <label style="font-size: 12px;">high</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--End of fifth row form--}}

                        <div class="row">
                            <div class="col-md-4">
                                    <label><b>Inspection Date</b></label>
                                    <input id="myDate" name="Inspection_date" type="date" style="font-size: 15px;" class="datepicker validate" required>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn right"> Submit </button>
                            </div>
                        </div>
                    </form>
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

            var registerForm = $("#edit_section");
            var formData = registerForm.serialize();

            $.ajax({
                type     : "POST",
                url      : '/edit_section',
                data     : formData,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Successfully Added', 4000, 'blue darken-4');
                    window.location.reload(true);
                }
            });
        });


    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 40 // Creates a dropdown of 15 years to control year
    });


</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>