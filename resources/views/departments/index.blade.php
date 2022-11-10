<!DOCTYPE html>
<html>
<head>
	<title>Departments</title>
</head>
<body>
	@include('main')
<h1>Departments</h1>
<a class="btn btn-outline-info" href="/departments/create">Create</a>
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Department Name</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			@foreach($data as $item)
				<tr>
					<td><a href="/departments/department/{{$item->id}}" target="_blank">{{$item->id}}</a></td>
					<td>{{$item->department_name}}</td>
					<td>{{$item->description}}</td>
				</tr>
			@endforeach
		</tr>
	</tbody>
</table>
</body>
</html>