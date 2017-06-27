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
<!--[if IE 8]> <html lang=en class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang=en class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang=en>
<!--<![endif]-->
<head>
<meta charset="utf-8"/>
<title>PMS-AACR</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv=Content-type content="text/html; charset=utf-8">
<meta content name="description"/>
<meta content name="author"/>
<link href=homepage__/materialize/css/materialize.css rel=stylesheet type="text/css"/>
<link href=homepage__/css/material.min.css rel=stylesheet type="text/css"/>
<link href=homepage__/materialize/css/dataTables.material.min.css rel=stylesheet type="text/css"/>
<link href=homepage__/font-awesome/css/font-awesome.css rel=stylesheet type=text/css>
<link href=homepage__/css/simple-line-icons.min.css rel=stylesheet type=text/css>
<link href=homepage__/css/bootstrap.min.css rel=stylesheet type=text/css>
<link href=homepage__/css/uniform.default.css rel=stylesheet type=text/css>
<link href=homepage__/css/components.css id=style_components rel=stylesheet type="text/css"/>
<link href=homepage__/css/plugins.css rel=stylesheet type="text/css"/>
<link href=homepage__/css/layout.css rel=stylesheet type="text/css"/>
<link id=style_color href=homepage__/css/grey.css rel=stylesheet type="text/css"/>
<link href=homepage__/css/custom.css rel=stylesheet type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<style>.modal-content input{font-size:14px}.dataTables_filter label{line-height:0}.modal-content input{font-size:14px}.modal{width:40%!important;height:35%!important}.sub-menu{background-color:#0d1217}</style>
</head>
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
<div class="page-header navbar navbar-fixed-top">
<div class="page-header-inner container">
<div class=page-logo>
<a href=index.html>
{{--<img src=homepage__/img/logo-default.png alt=logo class="logo-default"/>--}}
<h3 class=logo-default style=color:#edecec><b> PMS-AACR </b></h3>
</a>
<div class="menu-toggler sidebar-toggler fa fa-bars">
</div>
</div>
<div class=page-top>
<div class=top-menu>
<ul class="nav navbar-nav pull-right">
<li class="dropdown dropdown-user">
<a href=javascript: class=dropdown-toggle data-toggle=dropdown data-hover=dropdown data-close-others=true>
<img alt class=img-circle src="homepage__/img/avatar3_small.jpg"/>
<span class="username username-hide-on-mobile">
{{ Auth::user()->name }} </span>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li>
<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
<i class="fa fa-key"></i> Log Out </a>
<form id=logout-form action="{{ url('/logout') }}" method=POST style=display:none>
{{ csrf_field() }}
</form>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class=clearfix>
</div>
<div class=container>
<div class=page-container>
<div class=page-sidebar-wrapper>
<div class="page-sidebar navbar-collapse" style=position:fixed>
<ul class="page-sidebar-menu page-header-fixed" data-keep-expanded=false data-auto-scroll=true data-slide-speed=200>
<li class=start>
<a href=/Section_dashboard>
<i class="fa fa-home"></i>
<span class=title>Dashboard</span>
</a>
</li>
<li class=start>
<a>
<i class="fa fa-cogs"></i>
<span class=title>System Analysis</span>
</a>
<ul class=sub-menu>
<li>
<a href=/add_condition_index>
<i class="fa fa-add"></i>
Add new Inspeciton </a>
</li>
<li>
<a href=/density_deduct_values>
<i class></i>
Density and Deduct value</a>
</li>
<li>
<a href=/distress_Identification>
<i class></i>
Distress identification view</a>
</li>
</ul>
</li>
<li class=start>
<a href=/Cost_Analysis_input_view>
<i class="fa fa-money"></i>
<span class=title>Cost</span>
</a>
</li>
<li class=start>
<a href>
<i class="fa fa-bar-chart"></i>
<span class=title>Reports</span>
</a>
<ul class=sub-menu>
<li>
<a href=/Treatment_Recommendation>
<i class="fa fa-add"></i>
Treatment Recommend. </a>
</li>
<li>
<a href=/Maintainance_and_Rehablitation_plan>
<i class></i>
Maintenace and rehab plan </a>
</li>
<li>
<a href=/rehablitation_alternatives>
<i class></i>
Rehabilitation Alternatives</a>
</li>
<li>
<a href=/Life_Cycle_Cost_Analysis>
<i class></i>
Life Cycle Cost Analysis</a>
</li>
</ul>
</li>
<li class=start>
<a href=/project_info>
<i class="fa fa-info-circle"></i>
<span class=title>Project info</span>
</a>
</li>
</ul>
</div>
</div>
<div class=page-content-wrapper>
<div class=page-content>
<h3 class=page-title>
{{ $Section_Name }}- Treatement Recomendation
</h3>
<div id=Main-Content>
<div class=row>
<div class="col-md-12 portlet" style=background-color:#c0c6c21a>
<div class=row>
<div class=col-md-3>
<h4><b> From: </b> {{ $From }}
<b> To: </b> {{$To}} </h4>
</div>
<div class=col-md-3>
<h4><b> Surface :</b> {{ $Surface }} </h4>
</div>
<div class=col-md-2>
<h4><b> Area : </b> {{ $Area }} <small>m2</small> </h4>
</div>
<div class=col-md-3>
<h4><b> Inspection Date :</b> {{ $Session_Inspection_Date }} </h4>
</div>
<div class=col-md-3>
<h4><b> Total Quantity :</b> {{ $Sum }} <small>m2</small> </h4>
</div>
</div>
</div>
</div>
<div class=row>
<div class="portlet light bordered col-md-12">
<div class=portlet-title>
{{--<div class=caption>--}}
{{--Distress Types--}}
{{--</div>--}}
<div class=actions id=append>
</div>
</div>
<div class=portlet-body>
<div class=scroller style=height:400px;overflow:hidden;width:auto>
<table id=example class=mdl-data-table width=100% cellspacing=0>
<thead>
<tr>
<th>Distress Type</th>
<th>Severity</th>
<th>Maintenance</th>
<th>Rehabilitation</th>
</tr>
</thead>
<tbody>
@if(! empty($condition_indices[0]))
@foreach( $condition_indices as $condition_index )
<tr>
<td>{{$condition_index->Distress_type}}</td>
<td>{{$condition_index->Severity}}</td>
@if($condition_index->Distress_type == "patch_cut" | $condition_index->Distress_type == "pothole" )
@if($condition_index->Severity == "low")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Patching
</td>
<td>
</td>
@elseif($condition_index->Severity == "medium")
<td>
Thin overlay <br/>
Patching
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@elseif($condition_index->Severity == "high")
<td>
Patching
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@endif
@elseif($condition_index->Distress_type == "shoving" | $condition_index->Distress_type == "raveling" )
@if($condition_index->Severity == "low")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Thin Overlay
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@elseif($condition_index->Severity == "medium")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Thin Overlay
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@elseif($condition_index->Severity == "high")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Thin Overlay
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@endif
@else
@if($condition_index->Severity == "low")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Crack sealing
</td>
<td>
</td>
@elseif($condition_index->Severity == "medium")
<td>
Slurry sealing <br/>
Micro surfacing <br/>
Thin Overlay
</td>
<td>
Thick overlay <br/>
</td>
@elseif($condition_index->Severity == "high")
<td>
Patching <br/>
Thin Overlay
</td>
<td>
Thick overlay <br/>
Mill and Overaly <br/>
Remove and Replace
</td>
@endif
@endif
</tr>
@endforeach
@endif
</tbody>
</table>
</div>
<div class=row>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=page-footer>
<div class=page-footer-inner>
2017 &copy; pavement management system
</div>
<div class=scroll-to-top>
<i class="fa fa-arrow-up"></i>
</div>
</div>
</div>
<!--[if lt IE 9]>
<![endif]-->
<script src=homepage__/js/jquery.min.js type=text/javascript></script>
<script src=homepage__/js/jquery-ui.min.js type=text/javascript></script>
<script src=homepage__/js/bootstrap.min.js type=text/javascript></script>
<script src=homepage__/js/jquery.slimscroll.min.js type=text/javascript></script>
<script src=homepage__/js/jquery.uniform.min.js type=text/javascript></script>
<script src=homepage__/js/bootstrap-switch.min.js type=text/javascript></script>
<script src=homepage__/js/metronic.js type=text/javascript></script>
<script src=homepage__/js/layout.js type=text/javascript></script>
<script src=homepage__/js/demo.js type=text/javascript></script>
<script src=homepage__/materialize/js/materialize.js></script>
<script src=homepage__/js/jquery.dataTables.min.js type=text/javascript></script>
<script src=homepage__/js/dataTables.material.min.js type=text/javascript></script>
<script>jQuery(document).ready(function(){Metronic.init();Layout.init();Demo.init();$("#example").DataTable({pageLength:60,columnDefs:[{targets:[0,1,2],className:"mdl-data-table__cell--non-numeric"}]});$("#example_length").hide();$(".mdl-grid").first().hide();$("form.ajax").submit(function(c){c.preventDefault();var b=new FormData($(this)[0]);$("#modal1").modal("close");var a=$("#add_picture");$.ajax({type:"POST",url:"/add_distress_pictures",data:b,mimeType:"multipart/form-data",contentType:false,cache:false,processData:false,success:function(d){console.log(d);Materialize.toast("Image Added",4000,"blue darken-2")}})});$("#example_filter").appendTo("#append")});</script>
</body>
</html>