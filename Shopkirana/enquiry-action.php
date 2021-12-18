<?php
require "db-connection.php";

if (isset($_POST['action']) ) //"action" is name of submit button
 {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$fullname=$fname." ".$lname;

	$insert=mysqli_query($con ,"insert into user_table(name,email,mobile,address) values('$fullname','$email','$number','$address')");

	if ($insert)
	 {
		echo "successful store data";
	}
	else
	{
		echo "insertion is fail";
	}
}
?>