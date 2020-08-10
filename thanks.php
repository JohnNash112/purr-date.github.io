<!DOCTYPE html>
<html>
<head>
	<title>Thanks for Registration</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		body{
			background: url(https://images.unsplash.com/photo-1529390304330-ee6c3d638802?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1081&q=80);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-color: black;

		}
		html{
			height: 100%;
		}
		div{
			text-align: center;
			color: white;
			padding-top: 2%;

		}

	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>

<?php

if(!empty($_POST["FirstName"]) && !empty($_POST["LastName"]) && !empty($_POST["Gender"]) && !empty($_POST["emailid"]) && !empty($_POST["pass"]) && !empty($_POST["agree"]) && !empty($_POST["Month"]) && !empty($_POST["day"]) && !empty($_POST["year"])){
	echo '<div>
	<p><h2>Thanks for visiting the dating page and registering on it....</h2></p>
	<a href="front.html"><button type="button" class="btn btn-success">Go to home <i class="fa fa-hand-o-up"></i></button></a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';

}
else{
	echo "<script> location.href='http://localhost:4000/www/form/index.php'; </script>";
}
?>
</body>
</html>