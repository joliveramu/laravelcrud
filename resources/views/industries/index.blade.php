<!DOCTYPE html>
<html>
<head>
	<title>Industries</title>
</head>
<body>
	@include('main')
<h1>Industries</h1>
<a class="btn btn-outline-info" href="/industries/create">Create</a>
<table class="table">
	<thead>
		<tr>
			<th>Industry ID</th>
			<th>Industry Name</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			@foreach($data as $item)
				<tr>
					<td><a href="/industries/industry/{{$item->id}}" target="_blank">{{$item->id}}</a></td>
					<td>{{$item->industry_name}}</td>
					<td>{{$item->description}}</td>
				</tr>
			@endforeach
		</tr>
	</tbody>
</table>
</body>
</html>