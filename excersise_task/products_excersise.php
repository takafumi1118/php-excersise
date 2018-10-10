<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<p>Customer Information</p>
				<form action="confirm.php" method="POST">
					<label for="Name">Name:</label>
					<input type="text" name="Name">
					<br>
					<label for="Age">Age:</label>
					<input type="number" name="Age">
					<br>
					<input type="submit" name="basicinformation">
			</div>
			<div class="col-md-6">
					<label for="Product">Product:</label>
					<select name="product">
						<option value="">--selected--</option>
						<option value="T-SHIRT">T-SHIRT</option>
						<option value="Longs-Pants">Longs Pants</option>
						<option value="Hoody">Hoody</option>
					</select>
					<br>
					<label for="Quantity">Quantity:</label>
					<input type="number" name="Quantity">
					<br>
					<input type="checkbox" name="OnSale">On Sale?
					<br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>