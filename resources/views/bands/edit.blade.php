<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="/bands/update" method="POST">
	@csrf
			
			<input type="hidden" name='id' value='{{ $band->id }}'>
			<label for="">Name:</label>
			<input type="text" name='name' value="{{$band->name}}">
			<label for="">Date Formed:</label>
			<input type="date" name='date_formed' value="{{$band->date_formed}}">
			<input type="submit">

</form>

</body>
</html>