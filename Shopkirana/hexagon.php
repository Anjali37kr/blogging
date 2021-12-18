<!DOCTYPE html>
<html>
<head>
	<title>Hexagon</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		*{
			margin: 0px;
			padding: 0px;
		}
		a
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: red;
			font-size: 80px;
			text-decoration: none;
			width: 142px;
			height: 80px;
			border: 2px solid transparent;
			line-height:30px;
			transition: .5s;
			text-align: center;
			
		}
		a:before,
		a:after
		{
			content: '';
			width: 100%;
			height: 100%;
			position: absolute;
			top: -2px;
			left: -2px;
			border: 2px solid transparent;
			transform: rotate(0deg);
			transition: .5s;

		}
		a:hover
		{
			border: 2px solid black;
			border-top: 2px solid transparent;
			border-bottom: 2px solid transparent;
		}
		a:hover:before
		{
			transform: rotate(120deg);
			border: 2px solid black;
			border-top: 2px solid transparent;
			border-bottom: 2px solid transparent;
		}
		a:hover:after
		{
			transform: rotate(-120deg);
			border: 2px solid black;
			border-top: 2px solid transparent;
			border-bottom: 2px solid transparent;
		}
		
		
	</style>
</head>
<body>
	<div class="hexagon">
		<a href=""><i class="fa fa-eye"></i></a>
		
		
		
	</div>

</body>
</html>