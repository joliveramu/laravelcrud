<!DOCTYPE html>
<html>
<head>
	<title>Industry Details</title>
</head>
<body>
	@include('main')
<h1>Industry Details</h1>
<form method="POST" action="/updateIndustry">
@csrf
<input type="hidden" name="txtID" value="{{$data->id}}" required/>
<label>Industry Name</label><br/>
<input type="text" name="txtName" value="{{$data->industry_name}}" required/></br>
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