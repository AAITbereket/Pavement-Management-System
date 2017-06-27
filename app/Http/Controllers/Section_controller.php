<?php namespace App\Http\Controllers;use Illuminate\Http\Request;use App\project;use App\Pavement_section;use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\DB;use Illuminate\Support\Facades\Session;use App\section_condition_index;use App\distress_pictures;use App\inspection_result;class Section_controller extends Controller{public function dashboard(){if(! Auth::check()){return redirect('/');}if(! Session::has('Section_Id')){return redirect('/dashboard');}$Session_Section_Id=Session::get('Section_Id');$Inspections=DB::table('inspection_results')->where('Section_Id',"$Session_Section_Id")->get();$Pavement_section=DB::table('pavement_sections')->where('Section_Id',"$Session_Section_Id")->get();if($Pavement_section->count()){$Pavement_section_=$Pavement_section[0];return view('Dashboard.Section_Dashboard_view',compact('Pavement_section_','Inspections'));}else{return redirect('/start_project_');}}public function Change_section(Request $request){$Section_Id=$request->Section_Id;Session::forget('Section_Id');return redirect('/dashboard');}public function add_condition_index(){if(! Auth::check()){return redirect('/');}if(! Session::has('Section_Id')){return redirect('/dashboard');}$Session_Section_Id=Session::get('Section_Id');$Pavement_section=DB::table('pavement_sections')->where('Section_Id',"$Session_Section_Id")->get();if($Pavement_section->count()){$Pavement_section_=$Pavement_section[0];return view('System_Analysis.Add_condition_index_view',compact('Pavement_section_'));}else{return redirect('/start_project_');}}public function add_condition_index_post(Request $request){if(! empty($request->alligatory_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='alligatory';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->alligatory_low;$New_section_condition->save();}if(! empty($request->alligatory_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='alligatory';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->alligatory_medium;$New_section_condition->save();}if(! empty($request->alligatory_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='alligatory';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->alligatory_high;$New_section_condition->save();}if(! empty($request->bleeding_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bleeding';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->bleeding_low;$New_section_condition->save();}if(! empty($request->bleeding_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bleeding';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->bleeding_medium;$New_section_condition->save();}if(! empty($request->bleeding_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bleeding';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->bleeding_high;$New_section_condition->save();}if(! empty($request->block_cracking_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='block_cracking';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->block_cracking_low;$New_section_condition->save();}if(! empty($request->block_cracking_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='block_cracking';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->block_cracking_medium;$New_section_condition->save();}if(! empty($request->block_cracking_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='block_cracking';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->block_cracking_high;$New_section_condition->save();}if(! empty($request->bumps_sags_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bumps_sags';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->bumps_sags_low;$New_section_condition->save();}if(! empty($request->bumps_sags_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bumps_sags';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->bumps_sags_medium;$New_section_condition->save();}if(! empty($request->bumps_sags_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='bumps_sags';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->bumps_sags_high;$New_section_condition->save();}if(! empty($request->corrugation_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='corrugation';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->corrugation_low;$New_section_condition->save();}if(! empty($request->corrugation_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='corrugation';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->corrugation_medium;$New_section_condition->save();}if(! empty($request->corrugation_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='corrugation';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->corrugation_high;$New_section_condition->save();}if(! empty($request->depression_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='depression';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->depression_low;$New_section_condition->save();}if(! empty($request->depression_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='depression';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->depression_medium;$New_section_condition->save();}if(! empty($request->depression_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='depression';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->depression_high;$New_section_condition->save();}if(! empty($request->edge_cracking_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='edge_cracking';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->edge_cracking_low;$New_section_condition->save();}if(! empty($request->edge_cracking_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='edge_cracking';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->edge_cracking_medium;$New_section_condition->save();}if(! empty($request->edge_cracking_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='edge_cracking';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->edge_cracking_high;$New_section_condition->save();}if(! empty($request->joint_ref_cracking_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='joint_ref_cracking';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->joint_ref_cracking_low;$New_section_condition->save();}if(! empty($request->joint_ref_cracking_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='joint_ref_cracking';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->joint_ref_cracking_medium;$New_section_condition->save();}if(! empty($request->joint_ref_cracking_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='joint_ref_cracking';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->joint_ref_cracking_high;$New_section_condition->save();}if(! empty($request->Lane_should_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='Lane_should';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->Lane_should_low;$New_section_condition->save();}if(! empty($request->Lane_should_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='Lane_should';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->Lane_should_medium;$New_section_condition->save();}if(! empty($request->Lane_should_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='Lane_should';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->Lane_should_high;$New_section_condition->save();}if(! empty($request->longtd_crack_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='longtd_crack';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->longtd_crack_low;$New_section_condition->save();}if(! empty($request->longtd_crack_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='longtd_crack';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->longtd_crack_medium;$New_section_condition->save();}if(! empty($request->longtd_crack_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='longtd_crack';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->longtd_crack_high;$New_section_condition->save();}if(! empty($request->patching_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='patching';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->patching_low;$New_section_condition->save();}if(! empty($request->patching_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='patching';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->patching_medium;$New_section_condition->save();}if(! empty($request->patching_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='patching';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->patching_high;$New_section_condition->save();}if(! empty($request->polished_aggregate_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='polished_aggregate';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->polished_aggregate_low;$New_section_condition->save();}if(! empty($request->polished_aggregate_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='polished_aggregate';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->polished_aggregate_medium;$New_section_condition->save();}if(! empty($request->polished_aggregate_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='polished_aggregate';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->polished_aggregate_high;$New_section_condition->save();}if(! empty($request->pothole_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='pothole';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->pothole_low;$New_section_condition->save();}if(! empty($request->pothole_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='pothole';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->pothole_medium;$New_section_condition->save();}if(! empty($request->pothole_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='pothole';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->pothole_high;$New_section_condition->save();}if(! empty($request->rutting_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='rutting';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->rutting_low;$New_section_condition->save();}if(! empty($request->rutting_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='rutting';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->rutting_medium;$New_section_condition->save();}if(! empty($request->rutting_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='rutting';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->rutting_high;$New_section_condition->save();}if(! empty($request->railroad_crossing_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='railroad_crossing';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->railroad_crossing_low;$New_section_condition->save();}if(! empty($request->railroad_crossing_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='railroad_crossing';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->railroad_crossing_medium;$New_section_condition->save();}if(! empty($request->railroad_crossing_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='railroad_crossing';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->railroad_crossing_high;$New_section_condition->save();}if(! empty($request->shoving_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='shoving';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->shoving_low;$New_section_condition->save();}if(! empty($request->shoving_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='shoving';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->shoving_medium;$New_section_condition->save();}if(! empty($request->shoving_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='shoving';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->shoving_high;$New_section_condition->save();}if(! empty($request->slippage_crack_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='slippage_crack';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->slippage_crack_low;$New_section_condition->save();}if(! empty($request->slippage_crack_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='slippage_crack';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->slippage_crack_medium;$New_section_condition->save();}if(! empty($request->slippage_crack_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='slippage_crack';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->slippage_crack_high;$New_section_condition->save();}if(! empty($request->swell_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='swell';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->swell_low;$New_section_condition->save();}if(! empty($request->swell_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='swell';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->swell_medium;$New_section_condition->save();}if(! empty($request->swell_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='swell';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->swell_high;$New_section_condition->save();}if(! empty($request->raveling_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='raveling';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->raveling_low;$New_section_condition->save();}if(! empty($request->raveling_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='raveling';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->raveling_medium;$New_section_condition->save();}if(! empty($request->raveling_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='raveling';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->raveling_high;$New_section_condition->save();}if(! empty($request->weathering_low)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='weathering';$New_section_condition->Severity='low';$New_section_condition->Quantity=$request->weathering_low;$New_section_condition->save();}if(! empty($request->weathering_medium)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='weathering';$New_section_condition->Severity='medium';$New_section_condition->Quantity=$request->weathering_medium;$New_section_condition->save();}if(! empty($request->weathering_high)){$New_section_condition=new section_condition_index();$New_section_condition->Section_Id=$request->Section_Id;$New_section_condition->Inspection_date=$request->Inspection_date;$New_section_condition->Inspection_Id=$request->Inspection_Id;$New_section_condition->Distress_type='weathering';$New_section_condition->Severity='high';$New_section_condition->Quantity=$request->weathering_high;$New_section_condition->save();}$Session_Inspection_Id=$request->Inspection_Id;$Session_Inspection_Date=$request->Inspection_date;Session::forget('Session_Inspection_Id');Session::put('Session_Inspection_Id',$Session_Inspection_Id);Session::forget('Session_Inspection_Date');Session::put('Session_Inspection_Date',$Session_Inspection_Date);return redirect('/distress_Identification');}public function distress_Identification(){if(! Auth::check()){return redirect('/');}if(! Session::has('Section_Id')){return redirect('/dashboard');}if(! Session::has('Session_Inspection_Id')){return redirect('/add_condition_index');}$Session_Section_Id=Session::get('Section_Id');$Pavement_section=DB::table('pavement_sections')->where('Section_Id',"$Session_Section_Id")->get();$Session_Inspection_Id=Session::get('Session_Inspection_Id');$Session_Inspection_Date=Session::get('Session_Inspection_Date');$condition_indices=DB::table('section_condition_indices')->where('Section_Id',"$Session_Section_Id")->where('Inspection_Id',"$Session_Inspection_Id")->get();if($condition_indices->count()){$condition_indices_=$condition_indices;}else{return redirect('/add_condition_index');}if($Pavement_section->count()){$Pavement_section_=$Pavement_section[0];return view('System_Analysis.Distress_Identification_view',compact('Pavement_section_','condition_indices_','Session_Inspection_Date'));}else{return redirect('/add_section');}}public function open_distress_pictures(Request $request){$Condition_Index_id=$request->Condition_Index_id;Session::put('Condition_Index_id',$Condition_Index_id);$Condition_pictures=DB::table('distress_pictures')->where('Condition_Index_id',"$Condition_Index_id")->get();if($Condition_pictures->count()){return $Condition_pictures;}else{return 'No_picture';}}public function add_distress_pictures(Request $request){$Image_=$request->file('Photo_url');if(isset($Image_)){$New_distress_pictures=new distress_pictures();$New_distress_pictures->Photo_name=$request->Image_Name;$New_distress_pictures->Condition_Index_id=$request->Condition_Index_id;$Image__name=uniqid()."_".$Image_->getClientOriginalName();$Image_->move(public_path('distress_images'),$Image__name);$New_distress_pictures->Photo_URL='/distress_images/'.$Image__name;$New_distress_pictures->save();$Condition_pictures=DB::table('distress_pictures')->where('Condition_Index_id',"$request->Condition_Index_id")->get();if($Condition_pictures->count()){return $Condition_pictures;}else{return null;}}return "not_working";}public function density_deduct_values(){if(! Auth::check()){return redirect('/');}if(! Session::has('Section_Id')){return redirect('/dashboard');}if(! Session::has('Session_Inspection_Id')){return redirect('/add_condition_index');}$Session_Section_Id=Session::get('Section_Id');$Pavement_section=DB::table('pavement_sections')->where('Section_Id',"$Session_Section_Id")->get();$Session_Inspection_Id=Session::get('Session_Inspection_Id');$Session_Inspection_Date=Session::get('Session_Inspection_Date');$condition_indices=DB::table('section_condition_indices')->where('Section_Id',"$Session_Section_Id")->where('Inspection_Id',"$Session_Inspection_Id")->get();$Quantities=DB::table('section_condition_indices')->where('Section_Id',"$Session_Section_Id")->where('Inspection_Id',"$Session_Inspection_Id")->pluck('Quantity');$Quantities_sum=array_sum($Quantities->toArray());if($condition_indices->count()){$condition_indices_=$condition_indices;}else{return redirect('/add_condition_index');}if($Pavement_section->count()){$Pavement_section_=$Pavement_section[0];return view('System_Analysis.Density_and_Deduct_value_view',compact('Quantities_sum','Pavement_section_','condition_indices_','Session_Inspection_Date'));}else{return redirect('/add_section');}}public function Open_inspection(Request $request){$Inspection_date_open=$request->Inspection_date_open;$Inspections_id=DB::table('section_condition_indices')->where('Inspection_date',"$Inspection_date_open")->pluck('Inspection_Id');$Inspection_id=$Inspections_id[0];Session::forget('Session_Inspection_Id');Session::forget('Session_Inspection_Date');Session::set('Session_Inspection_Id',$Inspection_id);Session::set('Session_Inspection_Date',$Inspection_date_open);return redirect('/distress_Identification');}public function Delete_inspection(Request $request){$Inspection_date_delete=$request->Inspection_date_delete;$Inspections_id=DB::table('section_condition_indices')->where('Inspection_date',"$Inspection_date_delete")->delete();$Inspections_id=DB::table('inspection_results')->where('Inspection_date',"$Inspection_date_delete")->delete();return redirect('/Section_dashboard');}public function Save_inspection(Request $request){$Session_Inspection_Date=Session::get('Session_Inspection_Date');$Session_project_Id=Session::get('Project_Id');$Inspection_Id=$request->Inspection_Id;$Pci=$request->Pci;$Inspections_id=DB::table('inspection_results')->where('Inspection_Id',"$Inspection_Id")->delete();$new_inspection=new inspection_result();$new_inspection->PCI=$Pci;$new_inspection->Inspection_Id=$Inspection_Id;$new_inspection->Project_Id=$Session_project_Id;$new_inspection->Inspection_date=$Session_Inspection_Date;$new_inspection->Section_Id=Session::get('Section_Id');$new_inspection->save();}}