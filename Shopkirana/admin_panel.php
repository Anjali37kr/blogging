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
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style-admin.css">
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
						<img src="images/<?php echo $_SESSION['image'] ?>" alt="userimage">
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
		<h1>Hearder Parts</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
		<br>



		
	</div>
	<!-- Main content -->
	
</body>
</html>