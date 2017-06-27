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

         #modal_1 { width: 40% !important ; height: 35% !important ; }

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
                <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
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
                    {{ $Section_Name }}- Distress Identification
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
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portlet light bordered col-md-7">
                            <div class="portlet-title">
                                <div class="caption">
                                    Distress Types
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
                                            <th>Distress Type</th>
                                            <th>Severity</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(! empty($condition_indices[0]))
                                            @foreach( $condition_indices as $condition_index )
                                                <tr>
                                                    <td>{{$condition_index->Distress_type}}</td>
                                                    <td>{{$condition_index->Severity}}</td>
                                                    <td>{{$condition_index->Quantity}}</td>
                                                    <td>
                                                        <button class="btn green" onclick="
                                                                event.preventDefault();
                                                                $('#Ajax_content_id').empty();
                                                                $('input[name=Condition_Index_id]').val('{{ $condition_index->Condition_Index_id}}');

                                                                var registerForm = $('{{"#open".$condition_index->Condition_Index_id}}');
                                                                var formData = registerForm.serialize();

                                                                $('#Add_image_pop_up').prop('disabled', false);

                                                                $.ajax({
                                                                    type     : 'POST',
                                                                    url      : '/open_distress_pictures',
                                                                    data     : formData,
                                                                    success  : function(data) {
                                                                            console.log(data);

                                                                            $.each(data, function() {

                                                                                    var main_outer_div = createElement('div');
                                                                                    main_outer_div.classList.add('row');
                                                                                    main_outer_div.classList.add('z-depth-1');
//                                                                                    main_outer_div.addClass('row');
//                                                                                    main_outer_div.addClass('z-depth-1');
//
                                                                                    var Image_name_div = createElement('div');
                                                                                    Image_name_div.classList.add('col-md-9');
//                                                                                    $.(Image_name_div).addClass('col-md-9');
                                                                                    Image_name_div.innerHTML = this.Photo_name;
                                                                                    main_outer_div.appendChild(Image_name_div);

                                                                                    var Image_container_div = createElement('div');
                                                                                    Image_container_div.classList.add('col-md-3');
//                                                                                    $.(Image_container_div).addClass('col-md-3');
                                                                                    main_outer_div.appendChild(Image_container_div);
//
                                                                                    var button = createElement('button');
                                                                                    button.classList.add('waves-effect');
                                                                                    button.classList.add('waves-light');
                                                                                    button.classList.add('btn');
                                                                                    button.classList.add('green');
                                                                                    button.classList.add('modal-trigger');
//                                                                                    button.href = '#modal'+this.id;
                                                                                    button.setAttribute('href', '#modal'+this.id);
                                                                                    button.setAttribute('data-target', 'modal'+this.id);
                                                                                    button.innerHTML = 'Show';
                                                                                    Image_container_div.appendChild(button);

                                                                                    var Image_modal = createElement('div');
                                                                                    Image_modal.classList.add('modal');
                                                                                    Image_modal.id = 'modal'+this.id;
//                                                                                    $.(Image_modal).addClass('modal');
//                                                                                    $.(Image_modal).attr(id, 'modal' + this.id);
//                                                                                    $.(Image_modal).appendTo(Image_container_div);
                                                                                      Image_container_div.appendChild(Image_modal);
//
                                                                                    var Image_modal_content = createElement('div');
                                                                                    Image_modal_content.classList.add('modal-content');
//                                                                                    $.(Image_modal_content).addClass('modal-content');
                                                                                    Image_modal.appendChild(Image_modal_content);
//
                                                                                    var Image = createElement('img');
                                                                                    Image.src = this.Photo_URL ;
                                                                                    Image.style.maxWidth = '700px';
                                                                                    Image.style.height = 'auto';
                                                                                    Image_modal_content.appendChild(Image);
//                                                                                    $.(Image_modal_content).appendChild(Image);

                                                                                    $('#Ajax_content_id').append(main_outer_div);
                                                                                });

                                                                            Materialize.toast('Opened', 4000, 'blue darken-4');
                                                                                $('.modal').modal({

                                                                                });

                                                                        }
                                                                    });
                                                                "> Open  </button>

                                                        <form id="{{"open".$condition_index->Condition_Index_id}}" action="{{ url('/open_distress_pictures') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="Condition_Index_id" value="{{$condition_index->Condition_Index_id}}">
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                    <!--End of databale i pasted-->

                                </div>
                            </div>
                        </div>

                        <div class="portlet light bordered col-md-5">

                            <div class="portlet-title">
                                <div class="caption">
                                    Distress Images
                                </div>
                            </div>

                            <div class="portlet-body">

                                <div class="" id="Ajax_content_id">

                                </div>

                                <div class="right">

                                    <div>
                                        <button id="Add_image_pop_up" class="waves-effect waves-light btn modal-trigger" disabled data-target="modal_1" href="#modal_1"> Add Image </button>
                                        <!-- Modal Structure -->
                                        <div id="modal_1" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12 ajax" id="add_picture" enctype="multipart/form-data" type="POST" action="{{ url('/add_distress_pictures') }}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="Condition_Index_id" id="Condition_Index_id" value="">
                                                        <div class="row modal-form-row">
                                                            <div class="col s4">
                                                                <label>Image Name </label>
                                                                <input name="Image_Name" class="validate valid" required="" aria-required="true" aria-invalid="false" type="text">
                                                            </div>
                                                            <div class="col s4">
                                                                <label > </label>
                                                                <input name="Photo_url" accept="image/*" type="file" required>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <button type="submit" class="btn right"> Add </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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


        $('.modal').modal({
            size: 'small'
        });


        $('form.ajax').submit(function(e){
            e.preventDefault();
            var formData = new FormData($(this)[0]);

//            if( ! $('#Condition_Index_id').val() )
//            {
//                $('#modal1').modal('close');
//                alert('First Select a Distress type')
//                return false;
//            }

            $('#modal_1').modal('close');

            var registerForm = $("#add_picture");
//            var formData = new FormData(registerForm);
            $.ajax({
                type     : "POST",
                url      : '/add_distress_pictures',
                data     : formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Image Added', 4000, 'blue darken-2');

                }
            });
        });

        $('#example_filter').appendTo('#append');
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>