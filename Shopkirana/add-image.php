<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload Image</title>
</head>
<body>
	<h1>Add Admin </h1>
	<form action="add-image-action.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Enter Your Name"><br><br>
		<input type="file" name="image"><br><br>
		<input type="submit" name="submit"><br><br>
	</form>

</body>
</html>