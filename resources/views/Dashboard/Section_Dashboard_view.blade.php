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

         .modal-content input {
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
                        <a href="/dashboard">
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
                                    Treatment Recommend. </a>
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
                        <h4>Basic Informations </h4>
                        <div class="col-md-12" style="padding: 10px;">
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
                            <div class="row">
                                <div class="col-md-3">
                                    <h5><b> Carriadge way type :</b> {{ $length }} <small>meters</small>  </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5><b> Direction : </b> {{ $Direction }}  </h5>
                                </div>
                                <div class="col-md-4 right">
                                    <div>
                                        <button class="waves-effect waves-light btn modal-trigger" data-target="modal1" href="#modal1"> Edit </button>
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12 ajax" id="edit_section" type="POST" action="{{ url('/edit_section') }}">
                                                        {{csrf_field()}}
                                                        <input name="Section_Id" value="{{$Section_Id}}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="hidden">

                                                        <div class="row modal-form-row">
                                                            {{--<div class="col s4">--}}
                                                                {{--<label for="image_url"> <b>Section Name</b> </label>--}}
                                                                {{--<input name="Section_name" value="{{$Section_Name}}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">--}}
                                                            {{--</div>--}}
                                                            <div class="col s4">
                                                                <label for="image_url">From </label>
                                                                <input name="Sec_From" value="{{$From }}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">
                                                            </div>
                                                            <div class="col s4">
                                                                <label for="image_url">To </label>
                                                                <input name="Sec_To" value="{{$To }}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <div class="row">
                                                            <div class="col s3">
                                                                <label for="image_url">Surface </label>
                                                                <select class="browser-default" name="Surface" required>
                                                                    <option  value="{{$Surface}}" selected > {{$Surface }} </option>
                                                                    <option value="Asphalt_Concrete">Asphalt Concrete</option>
                                                                    <option value="Port_land_cement">Port land cement</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label>Length (m) </label>
                                                                <input id="length" value="{{$length}}" name="Length" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url">Carriadge Width (m)</label>
                                                                <input id="C_width" value="{{$Carriage_width}}" name="Carriadge_Width" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url"> Area </label>
                                                                <input id="Area" name="Area" value="{{$Area}}" class="validate valid" required aria-required="true" aria-invalid="false" type="text" readonly>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <div class="row">
                                                            <div class="col s3">
                                                                <label for="image_url"> Street Type </label>
                                                                <select class="browser-default" name="street_type" required>
                                                                    <option value="{{$Street_type }}" selected> {{$Street_type }} </option>
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
                                                                    <option value="{{$Direction }}" selected> {{$Direction}} </option>
                                                                    <option value="East_bound">East bound</option>
                                                                    <option value="West_bound">West bound</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s3">
                                                                <label for="image_url">Carriage way type</label>
                                                                <select class="browser-default" name="Carriage_way_type" required>
                                                                    <option value="{{$Carriage_way_type}}" selected> {{$Carriage_way_type}}</option>
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
                                                                <input name="No_of_Lane" value="{{$Number_of_lane }}" class="validate valid" required="" aria-required="true" aria-invalid="false" type="number">
                                                            </div>
                                                        </div>
                                                        <input type="submit" class="btn right" value="Submit">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 right">
                                    <a href="{{ url('/Change_project') }}"
                                       onclick="event.preventDefault();document.getElementById('change_section').submit();">
                                        <i class="fa fa-pencil-square-o"></i> Change Section </a>

                                    <form id="change_section" action="{{ url('/Change_section') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="Section_Id" value="{{$Section_Id}}">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div id="recent projects">
                            <div class="row">
                                <h4 class="col-md-12">
                                    Previous Inspections
                                </h4>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <table class="table" border="4">
                                        <thead class="thead-default">
                                        <tr class="row left">
                                            @if(! empty($Inspections))
                                                <td> <h4> {{count($Inspections)}} inspections </h4> </td>
                                            @else
                                                <td> <h4> 0 inspections </h4> </td>
                                            @endif
                                        </tr>
                                        </thead>
                                        @if(! empty($Inspections))
                                            @foreach( $Inspections as $Inspection )
                                                <tr class="row">
                                                    <td class="col-md-8 left inspection_year"> {{$Inspection->Inspection_date}} </td>
                                                    <td class="hide pci_result">{{$Inspection->PCI}}</td>
                                                    <td class="col-md-1 right">
                                                        <li class="dropdown dropdown-user" style="list-style: none;">
                                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-default">
                                                                <li>
                                                                    <a href="{{ url('/Open_inspection') }}"
                                                                       onclick="event.preventDefault();document.getElementById('{{"open".$Inspection->Inspection_date}}').submit();">
                                                                        <i class="fa fa-key"></i> Open </a>

                                                                    <form id="{{"open".$Inspection->Inspection_date}}" action="{{ url('/Open_inspection') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="Inspection_date_open" value="{{$Inspection->Inspection_date}}">
                                                                    </form>

                                                                </li>

                                                                <li>
                                                                    <a href="{{ url('/Delete_inspection') }}"
                                                                       onclick="event.preventDefault();document.getElementById('{{"delete".$Inspection->Inspection_date}}').submit();">
                                                                        <i class="fa fa-trash"></i> Delete </a>

                                                                    <form id="{{"delete".$Inspection->Inspection_date}}" action="{{ url('/Delete_inspection') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="Inspection_date_delete" value="{{$Inspection->Inspection_date}}">
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

                                <div class="col-md-7">

                                    <canvas id="pci_charts_of_section">   </canvas>

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
<script src="homepage__/js/Chart.js" type="text/javascript"></script>

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

        $('#length').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val() );

        });

        $('#C_width').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val());

        });

        var years = new Array();
        $('.inspection_year').each(function () {
            years.push(($(this)[0].innerText ));
        });

        console.log(years);
        var PCIS = new Array();
        $('.pci_result').each(function () {
            PCIS.push( Number ($(this)[0].innerText ));
        });
        console.log(PCIS);

        var ctx = document.getElementById("pci_charts_of_section").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years,
                datasets: [{
                    label: 'pci',
                    data: PCIS,
                    backgroundColor: "rgba(20,185,214,1)"
                }]
            }
        });

    });



</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>