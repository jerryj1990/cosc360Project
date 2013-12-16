<!DOCTYPE html>
<html lang="en">
<head>
    <meta charsest="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<?php include 'functions.php'; ?>

	</head>
	<body>
	<div class="container fill">
	<header>
	<img src="UBC.png"></a>
	</header>
	<div id = "wrapper">
	<div id = "content" style="margin: 0px">
		<form class="well" name="formSubmit" action="accountCreation.php" method="post">
			<h1>Account Creation</h1>
			Please fill out the following information. All fields are required.

			<br><br>

			<label><strong>Username:</strong></label>
				<input type="text" name="ID"/></br>
			<label><strong>Password:</strong></label>
				<input type="password" name="password"/></br>

			<br><br>

			<label><strong>Student Number:</strong></label>
				<input type="text" name="studentID"/></br>
			<label><strong>First Name:</strong></label>
				<input type="text" name="firstName"/></br>
			<label><strong>Last Name:</strong></label
					><input type="text" name="lastName"/></br>
			<label><strong>Degree:</strong><label>
				<label class="radio"><input type="radio" name="degree" value="PHD">PHD</label>
				<label class="radio"><input type="radio" name="degree" value="MSc">MSC</label>
			<label><strong>Program:</strong></label>
				<label class="radio"><input type="radio" name="program" value="IGSO"/>IGSO</label>
				<label class="radio"><input type="radio" name="program" value="IGS"/>IGS</label>
				<label class="radio"><input type="radio" name="program" value="MATH"/>MATH</label></br>
			<label><strong>Room Number:</strong></label>
				<input type="text" placeholder="Example: SCI234" name="room"/></br>

			<input type="submit" name="formSubmit" value="Submit">
		</form>

</div> <!-- /content -->
</div> <!-- /wrapper -->
</div> <!-- /container -->
</body>
</html>