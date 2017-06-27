<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ## --- HomeContoller routes begin

Route::get('/home', 'HomeController@start_project');

//Route::get('/start_project', 'HomeController@start_project');

Route::post('/Open_project', 'HomeController@Open_project');

Route::post('/Delete_project', 'HomeController@Delete_project');

Route::get('/', 'HomeController@start_project');

// ## -- HomeController end

//## ---- Dashboard Controller routes begin
Route::get('/start_project_', 'DashboardController@start_Project');

Route::get('/dashboard', 'DashboardController@dashboard');

Route::post('/Change_project', 'DashboardController@Change_project');

Route::post('/create_project', 'DashboardController@create_project');

Route::post('/add_section', 'DashboardController@add_section');

Route::post('/edit_section', 'DashboardController@edit_section');

Route::post('/Open_section', 'DashboardController@Open_section');

Route::post('/Delete_section', 'DashboardController@Delete_section');
//### --- Dashboard Contrller --end

// ### -- Section Controller -- begin
Route::get('/Section_dashboard', 'Section_controller@dashboard');

Route::post('/Change_section', 'Section_controller@Change_section');

Route::get('/add_condition_index', 'Section_controller@add_condition_index');

Route::post('/add_condition_index_post', 'Section_controller@add_condition_index_post');

Route::get('/distress_Identification', 'Section_controller@distress_Identification');

Route::post('/open_distress_pictures', 'Section_controller@open_distress_pictures');

Route::post('/add_distress_pictures', 'Section_controller@add_distress_pictures');

Route::post('/Open_inspection', 'Section_controller@Open_inspection');

Route::post('/Delete_inspection', 'Section_controller@Delete_inspection');

Route::get('/density_deduct_values', 'Section_controller@density_deduct_values');

Route::post('/Save_inspection', 'Section_controller@Save_inspection');

// ### --- Section Controller -- end

// ## --- Cost analysis and rehab controller

Route::get('/Maintainance_and_Rehablitation_plan', 'Cost_Analysis_Controller@show_maintain_rehab_plan');

Route::post('/new_rehabplan_pavement_work', 'Cost_Analysis_Controller@new_rehabplan_pavement_work');

Route::post('/new_rehabplan_mantaince_type', 'Cost_Analysis_Controller@new_rehabplan_mantaince_type');

Route::post('/new_rehabplan_treatment_type', 'Cost_Analysis_Controller@new_rehabplan_treatment_type');

Route::post('/reset_maintain_and_rehab_plan', 'Cost_Analysis_Controller@reset_maintain_and_rehab_plan');

Route::get('/Treatment_Recommendation', 'Cost_Analysis_Controller@show_Treatment_Recommendation');

Route::get('/Cost_Analysis_input_view', 'Cost_Analysis_Controller@Cost_Analysis_input_view');

Route::get('/rehablitation_alternatives', 'Cost_Analysis_Controller@show_rehab_alternatives');

Route::get('/Life_Cycle_Cost_Analysis', 'Cost_Analysis_Controller@show_Life_Cycle_Cost_Analysis');

Route::post('/input_cost_analysis', 'Cost_Analysis_Controller@input_cost_analysis');

Route::post('/Save_Cost', 'Cost_Analysis_Controller@Save_Cost');
// ## --- end of cost and rehab controller


Auth::routes();


Route::get('/login_custom', function() {
    return view('login.login');
});

Route::get('/check_home', function() {
    return view('homepage.home');
});


Route::get('/project_info', function() {
    return view('Dashboard.project_info_view');
});

Route::get('/login____', function() {
    return view('login.login');
});
