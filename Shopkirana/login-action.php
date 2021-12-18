<?php 
require 'db-connection.php';
session_start();

if (isset($_POST['action']))
 {
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$data=mysqli_query($con , "select * from add_admin where(username='$username' && password='$password')");
	$num=mysqli_num_rows($data);

	if ($num==1) 
	{
		$row=mysqli_fetch_array($data);

		$_SESSION['name']=$row['name'];
		$_SESSION['image']=$row['image'];
		header('location:admin_panel.php');
				
	}
	else
	{
		echo "incorrect password or Email Id";
	}

	}

?>
































































