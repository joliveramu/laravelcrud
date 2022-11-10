<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>
</head>
<body>
@include('main')
<h1>Employees</h1>
<a class="btn btn-outline-info" href="/employees/create">Create</a>

<table class="table">
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Employee Age</th>
			<th>Employee Department</th>
			<th>Employee Industry</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			@foreach($data as $item)
				<tr>
					<td><a href="/employees/employee/{{$item->id}}" target="_blank">{{$item->id}}</a></td>
					<td>{{$item->employee_name}}</td>
					<td>{{$item->age}}</td>
					<td>{{$item->department_id}}</td>
					<td>{{$item->industry_id}}</td>
				</tr>
			@endforeach
		</tr>
	</tbody>
</table>
</body>
</html>