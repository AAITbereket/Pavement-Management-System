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

    $condition_indices = $condition_indices_;

    $Sum = $Quantities_sum;
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

         .modal { width: 40% !important ; height: 35% !important ; }

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
                                    Treatment Recommen. </a>
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
                    {{ $Section_Name }}- Density and Deduct values
                </h3>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->

                <div id="Main-Content">
                    <div class="row">
                        <div class="col-md-12 portlet" style="background-color:#c0c6c21a;">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4><b > From: </b> {{ $From }}
                                        <b> To: </b> {{$To}} </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Surface :</b> {{ $Surface  }}  </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4><b> Area : </b> {{ $Area  }} <small>m2</small>  </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Inspection Date :</b> {{ $Session_Inspection_Date  }}   </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Total Quantity :</b> {{ $Sum  }} <small>m2</small>  </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portlet light bordered col-md-12">
                            <div class="portlet-title">
                                {{--<div class="caption">--}}
                                    {{--Distress Types--}}
                                {{--</div>--}}
                                <div class="actions" id="append">
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="scroller" style=" height:400px; overflow: hidden; width: auto;">

                                    <!--Content of databale I pasted -->

                                    <table id="example" class="mdl-data-table" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Distress Type</th>
                                            <th>Severity</th>
                                            <th>Quantity</th>
                                            <th>Density</th>
                                            <th>Deduct</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(! empty($condition_indices[0]))
                                            @foreach( $condition_indices as $condition_index )
                                                <tr>
                                                    <td>{{$condition_index->Distress_type}}</td>
                                                    <td>{{$condition_index->Severity}}</td>
                                                    <td>{{$condition_index->Quantity}}</td>
                                                    {{--<td>{{  $Sum }}</td>--}}
                                                    <td> @if($condition_index->Distress_type == "raveling")
                                                            {{ round($Density = ($condition_index->Quantity * 100) / $length,3) }}
                                                         @else
                                                            {{ round($Density = ($condition_index->Quantity * 100) / $Area,3) }}
                                                         @endif

                                                    % </td>
                                                    {{--{{ $Density = 0.69 }}--}}
                                                    <td class="Deduct_values">
                                                        {{--for faigue or alligatory--}}
                                                        @if($condition_index->Distress_type == "alligatory")
                                                            @if($condition_index->Severity == "low")
                                                                {{  10.749 + ( 15.867 * pow($Density, 1) ) + ( 7.6012 * pow($Density, 2) ) + ( -1.4052 * pow($Density, 3) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  21.39 + ( 21.483 * pow($Density, 1) ) + ( 5.0615 * pow($Density, 2) ) + ( -1.5665 * pow($Density, 3) ) + ( 0.355 * pow($Density, 4) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  30.188 + ( 31.353 * pow($Density, 1) ) + ( 7.9737 * pow($Density, 2) ) + ( -10.227 * pow($Density, 3) ) + ( 0.2232 * pow($Density, 4) ) + ( 3.7003 * pow($Density, 5) ) + ( -1.1542 * pow($Density, 6) ) }}
                                                            @endif

                                                            {{--bleeding--}}
                                                        @elseif($condition_index->Distress_type == "bleeding")
                                                            @if($condition_index->Severity == "low")
                                                                {{  1.8295 + ( -14.933 * pow($Density, 1) ) + ( 42.465 * pow($Density, 2) ) + ( -47.127 * pow($Density, 3) ) + ( 25.107 * pow($Density, 4) ) + ( -4.5804 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  2.7872 + ( 5.3875 * pow($Density, 1) ) + ( 4.6612 * pow($Density, 2) ) + ( 0.3091 * pow($Density, 3) ) + ( -0.6957 * pow($Density, 4) ) + ( 0.5096 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  5.2119 + ( 6.414 * pow($Density, 1) ) + ( 7.4293 * pow($Density, 2) ) + ( 4.0615 * pow($Density, 3) ) + (  -0.4107 * pow($Density, 4) ) }}
                                                            @endif

                                                            {{--block_cracking--}}
                                                        @elseif($condition_index->Distress_type == "block_cracking")
                                                            @if($condition_index->Severity == "low")
                                                                {{  -0.1016 + ( 2.3786 * pow($Density, 1) ) + ( 8.6496 * pow($Density, 2) ) + ( -3.7548 * pow($Density, 3) ) + (  1.164 * pow($Density, 4) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  2.315 + ( 8.9552 * pow($Density, 1) ) + ( 5.602 * pow($Density, 2) ) + ( -3.4737 * pow($Density, 3) ) + ( 3.32 * pow($Density, 4) ) + ( -0.7577 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  6.0091 + ( 11.269 * pow($Density, 1) ) + ( 10.017 * pow($Density, 2) ) + ( 3.4588 * pow($Density, 3) ) + ( -1.5089 * pow($Density, 4) ) }}
                                                            @endif

                                                            {{--Edge cracking--}}
                                                        @elseif($condition_index->Distress_type == "edge_cracking")
                                                            @if($condition_index->Severity == "low")
                                                                {{  3.1444 + ( 2.0074 * pow($Density, 1) ) + ( 1.1778 * pow($Density, 2) ) + ( 6.222 * pow($Density, 3) ) + ( 2.0139 * pow($Density, 4) ) + ( -3.3278 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  8.2677 + ( 8.533 * pow($Density, 1) ) + ( 6.5905 * pow($Density, 2) ) + ( 1.8119 * pow($Density, 3) ) + ( -0.9679 * pow($Density, 4) ) + ( -1.349 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  13.367 + ( 13.955 * pow($Density, 1) ) + ( 12.973 * pow($Density, 2) ) + ( 6.5226 * pow($Density, 3) ) + ( -2.3835 * pow($Density, 4) ) + ( -4.1062 * pow($Density, 5) ) }}
                                                            @endif

                                                                {{--L & T cracking --}}
                                                        @elseif($condition_index->Distress_type == "longtd_crack")
                                                            @if($condition_index->Severity == "low")
                                                                {{  1.7349 + ( 6.0577 * pow($Density, 1) ) + ( 8.563 * pow($Density, 2) ) + ( 7.0654 * pow($Density, 3) ) + (  -11.37 * pow($Density, 4) ) + ( 4.3642 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  8.4355 + ( 14.045 * pow($Density, 1) ) + ( 5.2439 * pow($Density, 2) ) + ( 3.3775 * pow($Density, 3) ) + ( 2.1445 * pow($Density, 4) ) + ( -2.4006 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  17.67 + ( 22.303 * pow($Density, 1) ) + ( 15.702 * pow($Density, 2) ) + ( 11.802 * pow($Density, 3) ) + ( -0.432 * pow($Density, 4) ) + ( -4.7342 * pow($Density, 5) ) }}
                                                            @endif

                                                            {{--Patching --}}
                                                        @elseif($condition_index->Distress_type == "patching")
                                                            @if($condition_index->Severity == "low")
                                                                {{  2.1419 + ( 5.324 * pow($Density, 1) ) + ( 6.6383 * pow($Density, 2) ) + ( 5.2832 * pow($Density, 3) ) + ( -4.5093 * pow($Density, 4) ) + ( 1.0189 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  9.5535 + ( 12.007 * pow($Density, 1) ) + ( 6.5043 * pow($Density, 2) ) + ( 2.8351 * pow($Density, 3) ) + ( 0.9623 * pow($Density, 4) ) + ( -0.8932 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  19.016 + ( 16.806 * pow($Density, 1) ) + ( 3.9878 * pow($Density, 2) ) + ( 11.342 * pow($Density, 3) ) + ( 5.4961 * pow($Density, 4) ) + ( -5.7158 * pow($Density, 5) ) }}
                                                            @endif

                                                                {{-- Rutting --}}
                                                        @elseif($condition_index->Distress_type == "rutting")
                                                            @if($condition_index->Severity == "low")
                                                                {{  8.0082 + ( 14.038 * pow($Density, 1) ) + ( 5.0636 * pow($Density, 2) ) + ( -0.0406 * pow($Density, 3) ) + (  1.4484 * pow($Density, 4) + ( -0.9035 * pow($Density, 5) ) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  17.663 + ( 19.717 * pow($Density, 1) ) + ( 7.8427 * pow($Density, 2) ) + ( 0.5225 * pow($Density, 3) ) + ( -1.5932 * pow($Density, 4) )  }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  26.761 + ( 23.525 * pow($Density, 1) ) + ( 9.4589 * pow($Density, 2) ) + ( 3.7395 * pow($Density, 3) ) + ( -3.2432 * pow($Density, 4) ) }}
                                                            @endif

                                                            {{--Potholes--}}
                                                        @elseif($condition_index->Distress_type == "pothole")
                                                            @if($condition_index->Severity == "low")
                                                                {{  57.481 + ( 41.042 * pow($Density, 1) ) + ( 3.0305 * pow($Density, 2) ) + ( -1.5721 * pow($Density, 3) ) + ( 0.1291 * pow($Density, 4) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  90.65 + ( 66.661 * pow($Density, 1) ) + ( 7.8051 * pow($Density, 2) ) + ( -2.1575 * pow($Density, 3) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  109.11 + ( 58.957 * pow($Density, 1) ) + ( 1.3903 * pow($Density, 2) ) + ( -2.9872 * pow($Density, 3) ) }}
                                                            @endif

                                                                {{--Raveling --}}
                                                        @elseif($condition_index->Distress_type == "raveling")
                                                            @if($condition_index->Severity == "low")
                                                                {{  1.7828 + ( 0.5165 * pow($Density, 1) ) + ( -0.6228 * pow($Density, 2) ) + ( 3.191 * pow($Density, 3) ) + (  0.9732 * pow($Density, 4) ) + (  -1.2907 * pow($Density, 5) + (  0.2628 * pow($Density, 6) ) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  8.4392 + ( 3.406 * pow($Density, 1) ) + ( 1.3728 * pow($Density, 2) ) + ( 5.739 * pow($Density, 3) ) + (  0.667 * pow($Density, 4) ) + (  -2.1711 * pow($Density, 5) + (  0.5652 * pow($Density, 6) ) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  15.741 + ( 9.3802 * pow($Density, 1) ) + ( 7.0157 * pow($Density, 2) ) + ( 15.47 * pow($Density, 3) ) + (  -0.3931 * pow($Density, 4) ) + (  -7.6863 * pow($Density, 5) + (  2.2487 * pow($Density, 6) ) ) }}
                                                            @endif

                                                            {{-- Shoving --}}
                                                        @elseif($condition_index->Distress_type == "shoving")
                                                            @if($condition_index->Severity == "low")
                                                                {{  3.8756 + ( 10.363 * pow($Density, 1) ) + ( 2.7931 * pow($Density, 2) ) + ( 5.7746 * pow($Density, 3) ) + ( -2.6249 * pow($Density, 4) ) + ( 0 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "medium")
                                                                {{  9.4749 + ( 13.999 * pow($Density, 1) ) + ( 7.2303 * pow($Density, 2) ) + ( 4.1283 * pow($Density, 3) ) + ( 2.415 * pow($Density, 4) ) + ( -2.1604 * pow($Density, 5) ) }}
                                                            @elseif($condition_index->Severity == "high")
                                                                {{  18.608 + ( 16.77 * pow($Density, 1) ) + ( 12.338 * pow($Density, 2) ) + ( 8.1407 * pow($Density, 3) ) + ( -1.3562 * pow($Density, 4) ) + ( -2.3024 * pow($Density, 5) ) }}
                                                            @endif

                                                        @else
                                                            {{$Density}}

                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                    <!--End of databale i pasted-->

                                </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <h5><b> Total Deduct Value:</b> <div class="inline" id="tdv">  </div> </h5>
                                    </div>

                                    <div class="col-md-3">
                                        <h5><b> m: </b> <div class="inline" id="m">  </div> </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <h5><b> Corrected Deduct value: </b> <div class="inline" id="cdv">  </div> </h5>
                                    </div>

                                </div>
                                <br/>
                                <div class="row ">
                                    <div class="col-md-1">
                                        <h4><b>PCI:</b></h4>
                                    </div>

                                    <div class="inline col-md-3">
                                        <h4 id="pci_status"> </h4>
                                    </div>
                                    <div class="progress col-md-4" id="progress_bar_container">

                                        <div id="Progress_bar" class="inline determinate" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            <br>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h4 id="Pci_recommendation">  </h4>
                                    </div>

                                </div>
                                <div class="col-md-11">
                                    @if(! empty($condition_indices[0]))
                                        <?php  $my_array = $condition_indices->toArray(); ?>

                                        <form id="save_inspeciton" class="ajax" action="{{  url( '/Save_Inspection' ) }}" method="POST" >
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$my_array[0]->Inspection_Id}}" name="Inspection_Id">
                                            <input type="hidden" id="pci_input" name="Pci">
                                            <input type="submit" class="btn right" value="Save Inspection">
                                        </form>
                                    @endif
                                </div>

                            </div>
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
            "pageLength": 60,
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        } );

        $('#example_length').hide();
        $('.mdl-grid').first().hide();


        $('.modal').modal({
            size: 'small'
        });

        $('#example_filter').appendTo('#append');

        var valuesArray = new Array();

        $('.Deduct_values').each(function () {
            valuesArray.push( Number ($(this)[0].innerText ));
        });

        console.log( valuesArray );
        var max_Dv = Math.max.apply(Math, valuesArray);
        m = 1 + ( (9/98) * (100 - max_Dv ) );
        console.log(m);
        $('#m').html(Math.round(m * 1000) / 1000);

        var sum = 0;
        $.each(valuesArray,function(){sum+=parseFloat(this) || 0;});
        console.log(sum);
        $('#tdv').html(Math.round(sum * 1000) / 1000);

        // Cdv is to be calculated here

        m = Math.round(m);
        console.log(m);
//        m=2;

        if (m == 0)
        {
            var Cdv =  95;
        }
        else if (m == 1)
        {
            var Cdv =  sum;
        }
        else if (m == 2)
        {
            var Cdv =  -1.907 +  (0.819 * Math.pow(sum,1)) + (-0.0006 * Math.pow(sum,2)) + (-0.000004 * Math.pow(sum,3)) ;
            console.log(Cdv);
        }
        else if (m == 3)
        {
            var Cdv =  -6.1516 +  (0.8016 * Math.pow(sum,1)) + (-0.0009 * Math.pow(sum,2)) + (-0.000002 * Math.pow(sum,3)) ;
        }
        else if (m == 4)
        {
            var Cdv =  -7.9770 +  (0.6844 * Math.pow(sum,1)) + (0.0002 * Math.pow(sum,2)) + (-0.000005 * Math.pow(sum,3)) ;
            console.log(Cdv);
        }
        else if (m == 5)
        {
            var Cdv =  -7.8998 +  (0.6105 * Math.pow(sum,1)) + (0.0003 * Math.pow(sum,2)) + (-0.000004 * Math.pow(sum,3)) ;
        }
        else if (m == 6)
        {
            var Cdv =  -6.6359 +  (0.5140 * Math.pow(sum,1)) + (0.0009 * Math.pow(sum,2)) + (-0.000005 * Math.pow(sum,3)) ;
        }
        else
        {
            var Cdv =  -7.2983 +  (0.5192 * Math.pow(sum,1)) + (0.0012 * Math.pow(sum,2)) + (-0.000008 * Math.pow(sum,3)) ;
        }


        $('#cdv').html(Math.round(Cdv * 100) / 100);

        var pci = 100 - Cdv;

        pci = Math.round(pci * 100) / 100;

        if (85 < pci && pci < 100)
        {
            // Good Dark green
            $('#Progress_bar').css('background-color', "#006400" );
            $('#Progress_bar').css('color', "#fff" );
//            $('#Progress_bar').html(  pci + "% " + "Good");
            $('#pci_status').html(  pci + "% " + "Good");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html('Routine Maintenanace');

        }
        else if( pci > 70)
        {

            $('#Progress_bar').css('background-color', "#90EE90" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Satisfactory");
//            $('#pci_status').html(  pci + "% " + "Satisfactory");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html('Preventive Maintenanace');

        }
        else if(pci > 55)
        {
            $('#Progress_bar').css('background-color', "#ffff00" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Fair");
//            $('#pci_status').html(  pci + "% " + "Fair");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html(' Minor Rehabilitation ');
        }
        else if(pci > 40)
        {
            $('#Progress_bar').css('background-color', "#ff7777" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Poor");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html(' Minor Rehabilitation ');
        }
        else if(pci > 25)
        {
            $('#Progress_bar').css('background-color', "#ff5454" );
            $('#Progress_bar').css('color', "#fff" );
            $('#pci_status').html(  pci + "% " + "Very Poor");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html('Major Rehabilitation ');
        }
        else if(pci > 10)
        {
            $('#Progress_bar').css('background-color', "#ff0000" );
            $('#Progress_bar').css('color', "#fff" );
            $('#pci_status').html(  pci + "% " + "Serious");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html('Reconstruction');
        }
        else
        {
            $('#Progress_bar').css('background-color', "#666666" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "failed");
            $('#Progress_bar').css('width', pci + "%" );
            $('#Pci_recommendation').html('Reconstruction');
        }



        $('form.ajax').submit(function(e){
            e.preventDefault();
            $('#pci_input').val(pci);
//            var formData = new FormData($(this)[0]);
//
//            var formData = formData.serialize();

            var registerForm = $("#save_inspeciton");
            var formData = registerForm.serialize();
            $.ajax({
                type     : "POST",
                url      : '/Save_inspection',
                data     : formData,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Inspection Saved', 4000, 'red darken-2');
                }
            });
        });

    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>