<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charsest="utf-8"/>
    <title>Group 1 Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<?php include_once 'functions.php'; ?>

	<?php
		session_start(); 
		if(!isset($_SESSION['ID']) && !isset($_SESSION['role'])){
			header('Location: login.php');
		}
	?>
</head>
<body>
<div class="container fill">
<header>
	<img src="UBC.png"></a>          
</header>

<nav>
	<div class="menu">
	    <div class="navbar navbar-static">
	        <div class="navbar-inner">
	            <ul role="navigation" class="nav">
					<?php
					/*
						- adds PROFILE, STUDENTS, and COORDINATORS links to NAVIGATION menu
						- students only see LOGOUT on menu
					*/
						if($_SESSION['role']==1){
	                    	echo '<li><a href="students.php">Students</a></li>';
	                    	echo '<li><a href="coordinators.php">Coordinators</a></li>';
	                    }
					?>
	            </ul>
	            <div class="pull-right">
	            	<div class="nav">
						<li><a href="logout.php">Logout</a></li>
					</div>
				</div>
	        </div>
	    </div>
	</div>
</nav>