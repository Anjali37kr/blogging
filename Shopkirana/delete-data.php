<?php 
include 'db-connection.php';

$id=isset($_GET['stud_id']) ? $_GET['stud_id'] : die("Record not found");

$del=mysqli_query($con,"delete from registration where(id='$id')");
if ($del) 
{
	header('location:view-data.php');
}
else
{
	echo "Data is not deleted";
}








 ?>