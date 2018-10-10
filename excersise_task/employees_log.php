<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Employees Log</h1>
	<form action="employees_display.php" method="POST">
		<label for="Name">Name:</label>
		<input type="text" name="Name">
		<br>
		<label for="Time-in">Time In:</label>
		<br>
		<input type="number" name="Time-in-hours">Hour
		<input type="number" name="Time-in-minutes">Minutes
		<br>
		<label for="Time-Out">Time Out:</label>
		<br>
		<input type="number" name="Time-out-hours">Hour
		<input type="number" name="Time-out-minutes">Minutes
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>