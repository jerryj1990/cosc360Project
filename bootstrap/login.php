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
			 <?php include 'functions.php'; ?>
		</header>
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
					echo '<input type="password" class="span3" name="upass"/></br>';
					echo '<video id="video" width="200" height="160"></video>';
					echo '<button id="button" class="btn btn-primary">Submit</button>';
					echo '<button class="btn">Clear</button>';
					echo '</form></center>';
					echo '<div id="canvasHolder"></div>';
				}
			?>

		    <script>
	        var video;
	        var dataURL;

	        function setup() {
	            navigator.myGetMedia = (navigator.getUserMedia ||
	            navigator.webkitGetUserMedia ||
	            navigator.mozGetUserMedia ||
	            navigator.msGetUserMedia);
	            navigator.myGetMedia({ video: true }, connect, error);
	        }

	        function connect(stream) {
	            video = document.getElementById("video");
	            video.src = window.URL ? window.URL.createObjectURL(stream) : stream;
	            video.play();
	        }

	        function error(e) { console.log(e); }

	        addEventListener("load", setup);

	        function captureImage() {
	            var canvas = document.createElement('canvas');
	            canvas.id = 'hiddenCanvas';
	            //add canvas to the body element
	            document.body.appendChild(canvas);
	            //add canvas to #canvasHolder
	            document.getElementById('canvasHolder').appendChild(canvas);
	            var ctx = canvas.getContext('2d');
	            canvas.width = video.videoWidth / 4;
	            canvas.height = video.videoHeight / 4;
	            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
	            //save canvas image as data url
	            window.open(canvas.toDataURL('image/png'));
				
	        }

	        //Bind a click to a button to capture an image from the video stream
	        var el = document.getElementById("button");
	        el.addEventListener("click", captureImage, false);

	   		</script>
			</div> <!-- /content -->
		</div> <!-- /wrapper -->
	</div> <!-- /container -->
</body>
</html>
