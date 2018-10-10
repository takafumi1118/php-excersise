<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="display.php" method="POST">
		<label for="Name">Name</label>
		<input type="text" name="Name">
		<br>
		<label for="Age">Age</label>
		<input type="number" name="Age">
		<br>
		<label for="Address">Address</label>
		<textarea name="Address" cols="30" rows="10"></textarea>
		<input type="submit" name="basicinformation">
	</form>

	<br>

	<form action="display.php" method="POST">
		<label for="Firstnumber">First number</label>
		<input type="number" name="Firstnumber">
		<br>
		<label for="Secondnumber">Second number</label>
		<input type="number" name="Secondnumber">
		<br>
		<input type="submit" value="add" name="add_submit">
		<br>
		<input type="submit" value="substract" name="substract_submit">
	</form>
</body>
</html>