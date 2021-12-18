<?php 
	require 'db-connection.php';

if (isset($_POST['submit']))
 {
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$rpass = $_POST['repassword'];
	$img = $_FILES['image'];
	$orginal_image_name = $_FILES['image']['name'];
	$tmp_image_name = $_FILES['image']['tmp_name'];
	$target = "images/";

	move_uploaded_file($tmp_image_name, $target.$orginal_image_name);

	$data = mysqli_query($con, "insert into add_admin(name,mobile,username,password,image) values('$name','$mobile','$uname','$pass' , '$orginal_image_name')");

	if ($data)
	 {
		echo "<pre>";
		print_r($img);
	}
	else
	{
		echo "Failed";
	}


}













 ?>