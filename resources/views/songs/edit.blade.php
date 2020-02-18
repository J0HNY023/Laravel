<html>
	<body>
		<form action="/bands/songs/update" method="POST">
			@csrf
			<input type="hidden" name='id' value='{{ $song->id }}'>
			<label for="">Title:</label>
			<input type="text" name='title' value = '{{ $song->title }}'>
			<label for="">Duration:</label>
			<input type="number" name='duration' value="{{ $song->duration}}">

			<input type="submit">
		</form>
	</body>
</html>