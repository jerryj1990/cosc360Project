<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	include("password.php");
	$pw = $_POST['password'];
	$hash = password_hash($pw, PASSWORD_DEFAULT);

	include 'functions.php';
	$result = $db->prepare("INSERT INTO form (studentID, firstName, lastName, degree, program, room, annualReport1, annualReport2, annualReport3, annualReport4, annualReport5, annualReport6, scholarship, gta) VALUES (:studentID, :firstName, :lastName, :degree, :program, :room, 0, 0, 0, 0, 0, 0, 0, 0)");
	$result->bindValue(":studentID", $_POST['studentID'], PDO::PARAM_STR);
	$result->bindValue(":firstName", $_POST['firstName'], PDO::PARAM_STR);
	$result->bindValue(":lastName", $_POST['lastName'], PDO::PARAM_STR);
	$result->bindValue(":degree", $_POST['degree'], PDO::PARAM_STR);
	$result->bindValue(":program", $_POST['program'], PDO::PARAM_STR);
	$result->bindValue(":room", $_POST['room'], PDO::PARAM_STR);
	$result->execute();

	$result1 = $db->prepare("INSERT INTO user (ID, password, studentID, role) VALUES (:ID, :password,  :studentID, :role)");
	$result1->bindValue(":studentID", $_POST['studentID'], PDO::PARAM_STR);
	$result1->bindValue(":ID", $_POST['ID'], PDO::PARAM_STR);
	$result1->bindValue(":password", $hash, PDO::PARAM_STR);
	$result1->bindValue(":role", 0, PDO::PARAM_STR);
	$result1->execute();
	echo 'Please wait while being redirected...';
	//echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=students.php"></head><body>';
?>