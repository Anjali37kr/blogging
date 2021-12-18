<?php session_start();

 if (!isset($_SESSION['name']))
  {
 	header('location:login.php');
 }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Admin</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/add-admin.css">
</head>
<body>
	<!---============================== Navbar ============================ -->
	<div class="navbar">
		<ul class="navbar-nav">
			<li class="navbar-item">
				<a class="nav-link">
					<i class="fas fa-bars"></i>
				</a>
			</li>
			<li class="navbar-item">
				<a class="nav-link">
					<img src="images/f-logo.webp" width="100px;">
				</a>
			</li>
		</ul>

		<form class="navbar-search">
			<input type="text" name="search" class="navbar-search-input" placeholder="What you looking for..">
			<i class="fas fa-search"></i>

		</form>

    <form class="navbar-search">
			<input type="text" name="search" class="navbar-search-input" placeholder="What you looking for..">
			<i class="fas fa-search"></i>

		</form>

		<ul class="navbar-nav nav-right">
			<li class="navbar-item">
				<a class="nav-link">
					<i class="fas fa-bell"></i>
					<span class="navbar-badge">15</span>
				</a>
			</li>
			<li class="navbar-item">
				<a class="nav-link">
					<div class="profile-img">
						<img src="images/profile-image.jpg">
					</div>
					<p><?php
						echo $_SESSION['name'];
					 ?></p>
				</a>
			</li>
		</ul>
	</div>
	<!---============================== Navbar End ============================ -->

	<!-- ================================sidebar started ===========================-->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item active">
				<a href="#" class="sidebar-nav-link ">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-eye"></i>
					</div>
					<span>Add Admin</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="add-logo.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-users"></i>
					</div>
					<span>Add Logo</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user-cog"></i>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="logout.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-sign-out-alt"></i>
					</div>
					<span>Log Out</span>
				</a>
			</li>
		</ul>
	</div>
	<!--==================================== End sidebar ===================================-->

	<!-- =====================Main Content started ======================== -->

	<!-- =====================Add admin started ======================== -->

	<div class="wrapper">
		<div class="row">
			<div class="col-md-4 add_admin_section">
				<h1>Admin Details</h1>
				<form class="add-admin-form" action="add-admin-action.php" method="post" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="Enter Full name">
					<input type="text" name="mobile" placeholder="Enter Mobile Number">
					<input type="text" name="username" placeholder="Enter User name">
					<input type="password" name="password" placeholder="Enter Password">
					<input type="password" name="repassword" placeholder="Enter Re-password">
					<input id="image-file" type="file" name="image">
					<input id="submit-btn" type="submit" name="submit">
				</form>
			</div>
			<!-- =====================Add admin end ======================== -->
			<!-- =====================Veiw all data on admin ======================== -->
			<?php
				require "db-connection.php";
				$data=mysqli_query($con, "select * from add_admin");
				$num_row=mysqli_num_rows($data);
			?>

			<div class="col-md-8 view-admin-section">
				<table border="1">
	 			<caption ><h1 style="text-align: center;">ALL ADMIN DATA</h1></caption>
	 			<thead>
	 				<tr>
	                    <th> SL# </th>
	 					<th>Name</th>
	 					<th>Mobile No.</th>
	                    <th>Username</th>
	                    <th>Image</th>
	                    <th>Action</th>
	 				</tr>
	 			</thead>
	 			<tbody>
 			<?php
				$i=1;
				while ($i<=$num_row)
				{
					$row=mysqli_fetch_array($data);
				 ?>
                    <tr>
                        <td><?php echo $i; ?> </td>
                        <td> <?php echo $row['name']; ?> </td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><img src="images/<?php echo $row['image'];?>" alt="userimage"> </td>
                        <td><button onclick="deleteadmin(<?php echo $row['id']; ?>)">Delete</button>
                        	<button>Update</button></td>
                    </tr>
            <?php
                $i++;
                }
            ?>
 			</tbody>
 		</table>
 		 <button id="hidebtn" onClick="viewbutton()">View All Admin</button>
	</div>
</div>
</div>
	<!-=================================- Main content End ===============================================-->
<script type="text/javascript">

	function deleteadmin(ids)
	{
		var insert=confirm("Are you sure to delete admin");
		if(insert)
		{
			window.location='delete-admin-data.php?admin_id='+ids;
		}
	}

	function viewbutton()
	{
		document.querySelector('.view-admin-section table').style.display = "block";
	}

</script>
</body>
</html>
