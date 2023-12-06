<!DOCTYPE html>
<html>
<head>
	<title>Products Form</title>
</head>
<body>
	<h2>Products Form</h2>
	<form action="process.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label for="description">Description:</label>
		<input type="description" name="description" id="description">
		<br><br>
		<label for="image">Image URL:</label>
		<input type="imageURL" name="imageURL" id="imageURL">
		<br><br>
		<label for="price">Price:</label>
		<input type="price" name="price" id="price">
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>