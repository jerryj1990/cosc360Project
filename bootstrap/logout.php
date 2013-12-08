<!--logout page also ends the session. take the user back to login page-->
<?php
	session_start();
	session_destroy();
	header('Location: login.php');
?>