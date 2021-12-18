<!DOCTYPE html>
<html>
<head>
	<title>Registraction Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		.registration-page
		{
			width: 600px;
			height: 600px;
			background-color: rgb(64, 64, 64);	
			position: absolute;
			top: 5%;
			left: 30%;


		}
		.login-logo
		{
			width: 150px;
			position: relative;
			left: 35%;
			top: 3%;
		}
		.loginpage input ,label
		{
			width: 90%;
			border-radius: 5px;
			padding: 7px;
			border: none;
			margin-left: 5%;
			margin-bottom: 3%;	
		}
		
		.submit-btn
		{
			border-radius: 5px;
			border: none;
			padding: 10px;
			width: 20%;
			margin-top: 5%;
			background-color: #F04E23;
			color: white;
			font-size: 16px;
			margin-left: 40%;
		}
		.submit-btn:hover
		{
			background-color: white;
			border: 2px solid #F04E23;
			color: #F04E23;

		}
		
	</style>

</head>
<body>
	<div class="registration-page">
		<img class="login-logo" src="images/f-logo.webp">

		<form class="loginpage" action="registration-action.php" method="post">
			<div class="row">
				<div class="col-md-6">
					<div style="margin-top: 20%;">
						<label style="color: white;">First Name :</label>
						<input type="text" name="fname" placeholder="First name" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div style="margin-top: 20%;">
						<label style="color: white;" >Last Name :</label>
						<input type="text" name="lname" placeholder="Last name" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">Mobile :</label>
						<input type="number" name="mobile" placeholder="Mobile" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">Email :</label>
						<input type="email" name="email" placeholder="email" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">User Name :</label>
						<input type="text" name="username" placeholder="username" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">Date of Birth :</label>
						<input type="date" name="dob" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">Password :</label>
						<input type="password" name="password" placeholder="password" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<label style="color: white;">Confirm password :</label>
						<input type="password" name="cpassword" placeholder="confirm password" required="">
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="submit-btn" name="action">Submit</button>
				</div>
			</div>
		</form>	
	</div>

</body>
</html>
