<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<h1>Register</h1>

<form class="content" action='thanks.php' method='POST'>
	<label for="name1"><b>First Name:</b></label>
	<input id="name1" type="text" name="FirstName" placeholder="John" required="" >
	<label for="name2"><b>Last Name:</b></label>
	<input id="name2" type="text" name="LastName" required="" placeholder="Smith" >
	<br>
	<label> <b>Male</b>
		<input type="radio" name="Gender" value="M">
	</label>
	<label>
		<b>Female</b>
		<input type="radio" name="Gender" value="F">
	</label>
	<label>
		<b>Others</b>
		<input type="radio" name="Gender" value="Others">
	<br>
	
	<label for="Email"><b>Email:</b></label>
	<input id="Email" type="Email" name="emailid" required="" placeholder="Your Email" required="" >
	<label for="pass"><b>Password:</b></label>
	<input type="Password" name="pass" id="pass" pattern=".{5,10}" required title="Password must be 5 to 10 charater" required="" placeholder="Password" >
	<br>
	<label><b>Birthday:</b>
		
			<select name="Month">
				<option value=0>Month</option>
				<option value="Jan">January</option>
				<option value="Feb">Februrary</option>
				<option value="Mar">March</option>
				<option value="Apr">April</option>
			</select>
		
		
			<select name="day">
				<option value=0>Day</option>
				<option value=1>1</option>
				<option value=2>2</option>
				<option value=3>3</option>
				<option value=4>4</option>
			</select>
		
		
			<select name="year">
				<option value=0>Year</option>
				<option value=1998>1998</option>
				<option value=1999>1999</option>
				<option value=2000>2000</option>
				<option value=2001>2001</option>
			</select>
		
	
	<br>
	<label><b>I agree to the terms and conditions</b>
		<input type="checkbox" name="agree" value="True" required="">
	</label>
	<br>
	
	<input type='submit' value='submit'>
</form>
</body>
</html>