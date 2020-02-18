<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		th{border:  black solid 2px;}
		td{border:  black solid 2px;}
	</style>
</head>
<body>

<a href="/bands/create/create">Add Band</a>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Formed</th>
			<th>Actions</th>
		</tr>

	</thead>
	<tbody>
		@foreach($bands as $band)
		
		<tr>
			<td>{{$band->name}}</td>
			<td>{{\Carbon\Carbon::parse($band->date_formed)->toFormattedDateString()}}</td>
			<td>
				<a href="/bands/{{ $band->id }}">View</a>
			</td>
			<td>
				<a href="/bands/edit/{{$band->id}}">Edit</a>
			</td>
			<td>
				<a href="/bands/delete/{{$band->id}}">Delete</a>
			</td>
		</tr>
			
		@endforeach

	</tbody>

</table>
</body>
</html>