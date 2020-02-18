<html>
	<body>
		<form action="/bands/{{ $band->id }}/songs/store" method="POST">
			@csrf
			<label for="">Title:</label>
			<input type="text" name='title'>
			<label for="">Duration:</label>
			<input type="number" name='duration' >
			<input type="submit">
		</form>
	</body>
</html>