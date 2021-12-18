<?php 
require 'db-connection.php';

if(isset($_POST['action']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$fullname=$fname . " ".$lname;
	
	$insert=mysqli_query($con ,"insert into registration(name,mobile,email,username,dob,password,cpassword) values('$fullname' ,'$mobile','$email','$username','$dob','$password','$cpassword')");

	if ($insert) 
		{
			echo "Data store in database";
		}
	else
		{
			echo "connection Fail";
		}

}
else
{
	echo "action not found , plz try again";
}

 ?>