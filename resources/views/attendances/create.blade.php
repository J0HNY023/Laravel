<html>
	<form action="/attendances/store" method="post">
		@csrf
		<label for="">Date:</label>
		<input type="date" name='date'>
		<br>
		<label for="">Employee</label>
		<input type="text" name='employee'>
		<br>
		<label for="">Time in</label>
		<input type="time" name='time_in'>
		<br>
		<input type="submit">

	</form>
</html>