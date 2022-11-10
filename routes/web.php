<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Industry;
use App\Models\Department;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Main Page
Route::get('/', function(){
	return view('main');
});

//Employees
//Display All Employees page
Route::get('/employees', function(){

	$data = Employee::all();
	return view('employees.index', ["data"=>$data]);
});

//Display Employee's Create Page
Route::get('/employees/create', function()
{
	return view('employees.create');
});

//Create Employee
Route::post('/employees', function(Request $request){

	$request->validate([
		"employee_name" => 'required',
		"age" => "required|integer",
		"department_id" => "required|integer",
		"industry_id"=> "required|integer"
	]);

	$data = new Employee;
	$data->employee_name = $request->txtName;
	$data->age = $request->txtAge;
	$data->department_id = $request->txtDepartment;
	$data->industry_id = $request->txtIndustry;
	$data->save();

	return redirect('/employees');
});

//Update Employee
Route::post('/updateEmployee', function(Request $request){
	
	$request->validate([
		"employee_name" => 'required',
		"age" => "required|integer",
		"department_id" => "required|integer",
		"industry_id"=> "required|integer"
	]);

	$data = Employee::find($request->txtID);
	$data->employee_name = $request->txtName;
	$data->age = $request->txtAge;
	$data->department_id = $request->txtDepartment;
	$data->industry_id = $request->txtIndustry;
	$data->save();

	return redirect('/employees');
});

//Get Employee's Details
Route::get('/employees/employee/{id}', function(Request $request){
	
	$data = Employee::find($request->id);
	//$data = Employee::where('id', $request->id)->first();
	return view('employees.details',['data'=> $data]);
});
//End of Employees

//Departments
//Get all Departments
Route::get('/departments', function(){
	$data = Department::all();
	return view('departments.index', ['data'=>$data]);
});

//Get Department's Details
Route::get('/departments/department/{id}', function(Request $request){
	$data = Department::find($request->id);
	return view('departments.details',['data'=> $data]);
});

//Create Department
Route::post('/departments', function(Request $request){

	$request->validate([
		"department_name" => 'required',
		"description" => "required"
	]);

	$data = new Department;
	$data->department_name = $request->txtName;
	$data->description = $request->txtDescription;
	$data->save();

	return redirect('/departments');
});
//Redirect to Department Create page
Route::get('/departments/create', function()
{
	return view('departments.create');
});

//Update Departments
Route::post('/updateDepartment', function(Request $request){
	$request->validate([
		"department_name" => 'required',
		"description" => "required"
	]);

	$data = Department::find($request->txtID);
	$data->department_name = $request->txtName;
	$data->description = $request->txtDescription;
	$data->save();

	return redirect('/departments');
});
//End of Departments


//Industries
//Get Industry page
Route::get('/industries', function(){
	$data = Industry::all();
	return view('industries.index', ['data'=>$data]);
});

//Get a certain industry's rdetails
Route::get('/industries/industry/{id}', function(Request $request){
	
	$data = Industry::find($request->id);
	return view('industries.details', ['data'=>$data]);
});

//Create Industry
Route::post('/industries', function(Request $request){
	$request->validate([
		"industry_name" => 'required',
		"description" => "required"
	]);
	$data = new Industry;
	$data->industry_name = $request->txtName;
	$data->description = $request->txtDescription;
	$data->save();

	return redirect('/industries');
});

//Update Industry
Route::post('/updateIndustry', function(Request $request){
	$request->validate([
		"industry_name" => 'required',
		"description" => "required"
	]);
	$data = Industry::find($request->txtID);
	$data->industry_name = $request->txtName;
	$data->description = $request->txtDescription;
	$data->save();

	return redirect('/industries');
});
//Display Industry Create page
Route::get('/industries/create', function()
{
	return view('industries.create');
});


