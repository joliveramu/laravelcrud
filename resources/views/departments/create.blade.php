<!DOCTYPE html>
<html>
<head>
	<title>Create Department</title>
</head>
<body>
	@include('main')
<h1>Create Department</h1>

<form method="post" action="/departments">
@csrf
<label>Department Name</label><br/>
<input type="text" name="txtName" required/></br>
<label>Description</label><br/>
<textarea name="txtDescription"></textarea></br>
<button class="btn btn-outline-info" type="submit">Create Record</button>
</form>

@if ($errors->any())
	@foreach($errors->all() as $error)
		<p class="text-danger">{{$error}}</p>
	@endforeach
@endif



</body>
</html>