<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>
@include('main')	
<h1>Employee Details</h1>
<form method="POST" action="/updateEmployee">
@csrf
<input type="hidden" name="txtID" value="{{$data->id}}" required/>
<label>Name</label><br/>
<input type="text" name="txtName" value="{{$data->employee_name}}" required/></br>
<label>Age</label><br/>
<input type="number" name="txtAge" value="{{$data->age}}" required/></br>
<label>Department ID</label><br/>
<input type="number" name="txtDepartment" value="{{$data->department_id}}" required/></br>
<label>Industry ID</label><br/>
<input type="number" name="txtIndustry" value="{{$data->industry_id}}" required/></br>
<button class="btn btn-info" type="submit">Edit Record</button>
</form>
@if ($errors->any())
	@foreach($errors->all() as $error)
		<p class="text-danger">{{$error}}</p>
	@endforeach
@endif


</body>
</html>