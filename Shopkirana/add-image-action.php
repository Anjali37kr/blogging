<?php 
include 'db-connection.php';


if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$orginal_image_name=$_FILES['image']['name'];
	$tmp_image_name=$_FILES['image']['tmp_name'];

	$image_type=explode('.', $orginal_image_name); //Extension Store in $image_type this variable.
	$type_check=strtolower(end($image_type)); //last index convert into lowercase and store in $type_check variable.

	$file_type_array=['png', 'jpg' ,'jpeg']; //create array

	if (in_array($type_check,$file_type_array)) 
	{
		$image_size=$_FILES['image']['size'];
		if ($image_size<=20480) 
		{
			echo 'image size accepted';
		}
		else
		{
 			echo 'file size not accepted';
 		}
 	}
 	else
 	{
 		echo 'File type not matched';
 	}

}









 ?>
<!--  $img_type = explode('.', $original_name);
 	$type_check = strtolower(end($img_type)); //will convert last index of array to lowercase

 	$file_type_store =['png','jpg','jpeg'];
 	if (in_array($type_check, $file_type_store)) 
 	{
 		$img_size = $_FILES['img']['size'];
 		if($img_size<=20480)
 		{
 			echo 'image size accepted';
 		}
 		else
 		{
 			echo 'fle size not accepted';
 		}
 	}
 	else
 	{
 		echo 'File type not matched';
 	}
 	

 }
 ?> -->