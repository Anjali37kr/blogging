<?php session_start();

	 if (!isset($_SESSION['name']))
	  {
	 	header('location:login.php');
	  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Add Logo</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/add-logo-style.css">
	<style type="text/css">	
	</style>
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

	<!-- sidebar -->
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
				<a href="add-admin.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-eye"></i>
					</div>
					<span>Add admin</span>
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
	<!-- End sidebar -->

	<!-- Main Content -->
	<div class="wrapper">
		<!-- ==========================Add logo started =============================== -->
	<div class="row main-content-div">
		<div class="image-upload col-md-6">
			<img src="images/<?php echo $orginal_image_name;?>">
			<button>Upload</button>
			<button>Remove</button>
		</div>
		
		<div class="choose-content col-md-6">
			<form action="add-logo-action.php" method="POST">
				<input id="file-image" type="file" name="image">
				<input type="number" name="width" placeholder="Width of Image">
				<input type="number" name="height" placeholder="Height of Image">
				<input id="submit" type="submit" name="view" value="View">
			</form>

		</div>
	</div>
	<!-- ==========================Add logo started =============================== -->	
</div>
	<!-- Main content Ended -->
</body>
</html>