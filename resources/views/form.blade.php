<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>


<form action="{{ url('/api/grupos/nuevo') }}" method="post">
	<input type="text" name="nombre">
	<input type="submit" name="btn">
</form>


</body>
</html>