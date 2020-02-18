<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="/bands/store" method="POST">
	@csrf
			<label for="">Name:</label>
			<input type="text" name='name'>
			<label for="">Date Formed:</label>
			<input type="date" name='date_formed' >
			<input type="submit">

</form>

</body>
</html>