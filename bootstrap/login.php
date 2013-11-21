<!DOCTYPE html>
<html>
<head>
    <meta charsest="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
		
    <style type="text/css">
            #login{
                margin: 15% auto;
                width: 210px;
            }
        </style>
</head>
<body>
	<header>
	 <img src="UBC.png"></a>          
	</header>
    <?php include 'functions.php'; ?>
	<div id = "wrapper">
				<div id = "content">
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
							echo '<input type="text" class="span3" name="upass"/></br>';
							echo '<br><br>';
							echo '<button class="btn btn-primary">Submit</button>';
							echo '<button class="btn">Clear</button>';
							echo '</form></center>';
						}
	?>
				</div>
	</div>
    <script src="js/bootsrap.js"></script>
</body>
</html>
