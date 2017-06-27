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
<style>.modal-content input{font-size:14px}.dataTables_filter label{line-height:0}.modal-content input{font-size:14px}.modal{width:40%!important;height:35%!important}.tabs .tab a{color:#c3c3c3}.tabs .tab a:hover,.tabs .tab a.active{color:#14b9d6}.sub-menu{background-color:#0d1217}</style>
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
<a href=index.html>
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
<h5 class=page-title>
{{ $From }} - {{$To}}- Rehabilitation Alternatives
</h5>
<div id=Main-Content>
<div class=row>
<div class="col-md-12 portlet" style=background-color:#c0c6c21a>
<div class=row>
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
<div class="portlet bordered col-md-12">
<div class=portlet-body>
<ul id=tabs-swipe-demo class=tabs>
<li class="tab col s4" class=active><a href=#test-swipe-1>Alternative 1</a></li>
<li class="tab col s4"><a href=#test-swipe-2>Alternative 2</a></li>
{{--<li class="tab col s3"><a href=#test-swipe-3>Alternative 3</a></li>--}}
{{--<li class="tab col s3"><a href=#test-swipe-4>Alternative 4</a></li>--}}
</ul>
<div id=test-swipe-1 class="col s12">
<br/><br/>
<h2 class=page-title> Mill and AC overlay overall the road section and slurry seal future maintenance </h2>
<br/>
<table>
<thead>
<tr>
<th data-field=id>Item</th>
<th data-field=name>Rehabilitation work</th>
<th data-field=price> Quantity </th>
<th data-field=name> Unit Rate </th>
<th data-field=price> Total Cost </th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Asphalt mill for 2" 50.8 mm </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#Tcost1')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab1()"> </td>
<td id=Tcost1> 0 </td>
</tr>
<tr>
<td>2</td>
<td> Compact the milled area </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#Tcost2')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab1()"> </td>
<td id=Tcost2> 0 </td>
</tr>
<tr>
<td>3</td>
<td> Tack Coat application above the compacted area </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#Tcost3')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab1()"> </td>
<td id=Tcost3> 0 </td>
</tr>
<tr>
<td>4</td>
<td> Asphalt Concrete overlay </td>
<td> {{ round($Sum_ = $Sum * 0.107442 ) }} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#Tcost4')[0].innerHTML='{{round($Sum_ , 2)}}'*this.value;Calculate_total_Cost_rehab1()"> </td>
<td id=Tcost4> 0 </td>
</tr>
<script>function Calculate_total_Cost_rehab1(){$("#Totalcostrehab").text((Math.round((Number($("#Tcost1").text())+Number($("#Tcost2").text())+Number($("#Tcost3").text())+Number($("#Tcost4").text()))*100))/100);console.log((Math.round(Number($("#Totalcostrehab").text())*100))/100);$("#input_Totalcostrehab").val($("#Totalcostrehab").text())}</script>
<tr>
<td></td>
<td></td>
<td></td>
<td><b> Total Rehabilitation Cost </b></td>
<td id=Totalcostrehab> 0 </td>
</tr>
</tbody>
</table>
<hr/>
<br/>
<table>
<thead>
<tr>
<th data-field=id>Item</th>
<th data-field=name>Maintenance work</th>
<th data-field=price> Quantity </th>
<th data-field=name> Unit Rate </th>
<th data-field=price> Total Cost </th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td> Slurry seal </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#Tcost9')[0].innerHTML=(Math.round(('{{$Sum}}'*this.value)*100))/100;$('#TotalMaintCost')[0].innerHTML=(Math.round(('{{$Sum}}'*this.value)*100))/100;$('#input_TotalMaintCost')[0].value='{{$Sum}}'*this.value"> </td>
<td id=Tcost9> 0 </td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><b> Total Maintenance Cost </b></td>
<td id=TotalMaintCost> 0 </td>
</tr>
</tbody>
</table>
<div class=row>
<div class=col-md-11>
<br/><br/>
<form method=POST action="{{url('/Save_Cost') }}">
{{csrf_field()}}
<input type=hidden id=input_TotalMaintCost name=input_TotalMaintCost>
<input type=hidden id=input_Totalcostrehab name=input_Totalcostrehab>
<input type=hidden name=Alternative value=Alternative1>
<input type=submit value=Submit class="btn right">
</form>
</div>
</div>
</div>
<div id=test-swipe-2 class="col s12">
<br/><br/>
<h2 class=page-title> Mill and AC overlay overall the road and micro-surfacing future maintenance </h2>
<br/>
<table>
<thead>
<tr>
<th data-field=id>Item</th>
<th data-field=name>Rehabilitation work</th>
<th data-field=price> Quantity </th>
<th data-field=name> Unit Rate </th>
<th data-field=price> Total Cost </th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Asphalt mill for 2" 50.8 mm </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#A2_Tcost1')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab()"> </td>
<td id=A2_Tcost1> 0 </td>
</tr>
<tr>
<td>2</td>
<td> Compact the milled area </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#A2_Tcost2')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab()"> </td>
<td id=A2_Tcost2> 0 </td>
</tr>
<tr>
<td>3</td>
<td> Tack Coat application above the compacted area </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#A2_Tcost3')[0].innerHTML='{{$Sum}}'*this.value;Calculate_total_Cost_rehab()"> </td>
<td id=A2_Tcost3> 0 </td>
</tr>
<tr>
<td>4</td>
<td> Asphalt Concrete overlay </td>
<td> {{ round($Sum_ = $Sum * 0.10744,2 ) }} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#A2_Tcost4')[0].innerHTML='{{round($Sum_ , 2)}}'*this.value;Calculate_total_Cost_rehab()"> </td>
<td id=A2_Tcost4> 0 </td>
</tr>
<script>function Calculate_total_Cost_rehab(){$("#Totalcostrehab2").text(Number($("#A2_Tcost1").text())+Number($("#A2_Tcost2").text())+Number($("#A2_Tcost3").text())+Number($("#A2_Tcost4").text()));console.log(Number($("#Totalcostrehab2").text()));$("#input_Totalcostrehab2").val($("#Totalcostrehab2").text())}</script>
<tr>
<td></td>
<td></td>
<td></td>
<td><b> Total Rehabilitation Cost </b></td>
<td id=Totalcostrehab2> </td>
</tr>
</tbody>
</table>
<hr/>
<br/>
<table>
<thead>
<tr>
<th data-field=id>Item</th>
<th data-field=name>Maintenance work</th>
<th data-field=price> Quantity </th>
<th data-field=name> Unit Rate </th>
<th data-field=price> Total Cost </th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td> Mico-surfacing cost </td>
<td> {{$Sum}} </td>
<td> <input id=unitRate1 type=number style=max-width:200px;font-size:14px onkeyup="$('#A2_Tcost9')[0].innerHTML='{{$Sum}}'*this.value;$('#A2_TotalMaintCost')[0].innerHTML='{{$Sum}}'*this.value;$('#input_TotalMaintCost2')[0].value='{{$Sum}}'*this.value"> </td>
<td id=A2_Tcost9> 0 </td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><b> Total Maintenance Cost </b></td>
<td id=A2_TotalMaintCost> 0 </td>
</tr>
</tbody>
</table>
<div class=row>
<div class=col-md-11>
<br/><br/>
<form method=POST action="{{url('/Save_Cost') }}">
{{csrf_field()}}
<input type=hidden id=input_TotalMaintCost2 name=input_TotalMaintCost>
<input type=hidden id=input_Totalcostrehab2 name=input_Totalcostrehab>
<input type=hidden name=Alternative value=Alternative2>
<input type=submit value=Submit class="btn right">
</form>
</div>
</div>
</div>
{{--<div id=test-swipe-3 class="col s12 green">--}}
{{--<h1>Alternative 3</h1>--}}
{{--</div>--}}
{{--<div id=test-swipe-4 class="col s12 green">--}}
{{--<h1>Alternative 4</h1>--}}
{{--</div>--}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=page-footer>
<div class=page-footer-inner>
2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target=_blank>Purchase Metronic!</a>
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
<script>jQuery(document).ready(function(){Metronic.init();Layout.init();Demo.init();$("#example").DataTable({pageLength:60,columnDefs:[{targets:[0,1,2],className:"mdl-data-table__cell--non-numeric"}]});$("#example_length").hide();$(".mdl-grid").first().hide();$(".modal").modal({size:"small"});$("#example_filter").appendTo("#append")});</script>
</body>
</html>