<?php 
	include'db-connection.php';

	if (isset($_POST['view']))
	{
		$width= $_POST['width'];
		$height= $_POST['height'];
		$orginal_image_name= $_FILES['image']['name'];
		$tmp_image_name= $_FILES['image']['tmp_name'];
		$target="images/";
		move_uploaded_file($tmp_image_name, $target.$orginal_image_name);
	}
?>