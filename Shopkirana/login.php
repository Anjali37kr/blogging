<?php
session_start();

if (isset($_SESSION['name']))
{
	header('location:admin_panel.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		.login-form
		{
			height: 440px;
			width: 700px;
			background-color: rgb(64, 64, 64);
			top: 10%;
			left: 25%;
			position: absolute;

		}
		.imgage-col img
		{
			width: 100%;
			position: absolute;
			height: 100%;
			margin-left:-20px;
		}
		.login-logo
		{
			width: 100px;
			position: relative;
			left: 30%;
			top: 7%;
		}
		.loginpage input
		{
			width: 100%;
			border-radius: 5px;
			padding: 10px;
			border: none;
			margin-top: 10%;
		}
		.submit-btn
		{
			border-radius: 25px;
			border: none;
			padding: 10px;
			width: 100%;
			margin-top: 10%;
			background-color: #F04E23;
			color: white;
			font-size: 16px;
			font-weight: bold;
		}
		 .signup-text
		{
			color: white;
			position: relative;
			top: 5%;
		}
		.signup-text a
		{
			color: #F04E23;
		}



	</style>
</head>
<body>
	<div class="row login-form">
		<div class="col-md-6 imgage-col">
			<img src="images/logimage1.jpg">
		</div>
		<div class="col-md-6">
			<img class="login-logo" src="images/f-logo.webp">
			<form class="loginpage" action="login-action.php" method="post" >
				<div style="margin-top: 20%;"><input type="text" name="username" placeholder="Username" required=""></div>

				<div><input type="password" name="password" placeholder="password" required=""></div>

				<button type="submit" class="submit-btn" name="action">Log In</button>
			</form>
			<a href="#" style="color: white;">Forgot password?</a>
			<div class="signup-text">
				<p>Don't have an account? <a href="registration.php">Sign up</a></p>
			</div>
		</div>
	</div>
</body>
</html>
