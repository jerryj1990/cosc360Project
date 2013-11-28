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
		<div id="wrapper">
			<div id="content">
				<?php
					session_start();
					if (isset($_SESSION['ID'])) {
						echo 'You are already logged in!';
					}
					else {
						if (!empty($_GET)) {
							echo 'Login Failed. Please try again.';
						}
						echo '<center><form class="well" id="login" action="verify.php" method="post">';
						echo '<label>Username</label>';
						echo '<input type="text" class="span3" name="uid"/></br>';
						echo '<label>Password</label>';
						echo '<input type="password" class="span3" name="upass"/></br>';
						echo '<br><br>';
						echo '<button class="btn btn-primary">Submit</button>';
						echo '<button class="btn">Clear</button>';
						echo '</form></center>';
					}
				?>
			</div>
		</div>
	</div> <!-- /container -->
</body>
</html>
