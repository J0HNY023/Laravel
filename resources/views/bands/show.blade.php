<html>
	<body>
		<h4><a href="/bands">{{ $band->name }}</a></h4>
		<a href="/bands/{{$band->id}}/songs/create">Add Song</a>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Duration</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($band->songs as $song)
					<tr>
						<td>{{ $song->id }}</td>
						<td>{{ $song->title }}</td>
						<td>{{ $song->duration }}</td>
						<td>
							<a href="/bands/songs/{{ $song->id }}/edit">
								Edit
							</a>
							<a href="/bands/songs/{{ $song->id }}/delete">
								Delete
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>