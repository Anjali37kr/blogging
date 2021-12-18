<?php 

	include 'db-connection.php';

	$getid=isset($_GET['admin_id']) ? $_GET['admin_id'] : die("Record not found");

	$del=mysqli_query($con,"delete from add_admin where(id='$getid')");
	if ($del)
	{
		header('location:add-admin.php');
	}
	else
	{
		echo "Admin is not deleted";
	}




 ?>