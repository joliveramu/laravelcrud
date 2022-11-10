<!DOCTYPE html>
<html>
<head>
	<title>Create Employees</title>
</head>
<body>
	@include('main')
<h1>Create Employees</h1>
<form method="post" action="/employees">
@csrf
<label>Name</label><br/>
<input type="text" name="txtName" required/></br>
<label>Age</label><br/>
<input type="text" name="txtAge" required/></br>
<label>Department ID</label><br/>
<input type="text" name="txtDepartment" required/></br>
<label>Industry ID</label><br/>
<input type="text" name="txtIndustry" required/></br>
<button class="btn btn-info" type="submit">Create Record</button>
</form>
@if ($errors->any())
	@foreach($errors->all() as $error)
		<p class="text-danger">{{$error}}</p>
	@endforeach
@endif



</body>
</html>