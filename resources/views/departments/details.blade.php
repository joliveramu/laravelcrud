<!DOCTYPE html>
<html>
<head>
	<title>Department Details</title>
</head>
<body>
	@include('main')
<h1>Department Details</h1>

<form method="POST" action="/updateDepartment">
@csrf
<input type="hidden" name="txtID" value="{{$data->id}}" required/>
<label>Department Name</label><br/>
<input type="text" name="txtName" value="{{$data->department_name}}" required/></br>
<label>Description</label><br/>
<textarea name="txtDescription">{{$data->description}}</textarea></br>
<button class="btn btn-outline-info" type="submit">Edit Record</button>
</form>

@if ($errors->any())
	@foreach($errors->all() as $error)
		<p class="text-danger">{{$error}}</p>
	@endforeach
@endif


</body>
</html>