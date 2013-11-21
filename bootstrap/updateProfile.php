<?php
	include 'functions.php';
	$result = $db->prepare("UPDATE form SET firstName = :firstName, lastName = :lastName, 
	degree = :degree, super1FirstName=:super1FirstName,super1LastName=:super1LastName,super2FirstName=:super2FirstName,
	super2LastName=:super2LastName,super1mail=:super1mail,super2mail=:super2mail,program=:program,room=:room,scholarship=:scholarship,gta=:gta WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":firstName", $_POST['firstName'], PDO::PARAM_STR);
	$result->bindValue(":lastName", $_POST['lastName'], PDO::PARAM_STR);
	$result->bindValue(":degree", $_POST['degree'], PDO::PARAM_STR);
	$result->bindValue(":super1FirstName", $_POST['super1FirstName'], PDO::PARAM_STR);
	$result->bindValue(":super1LastName", $_POST['super1LastName'], PDO::PARAM_STR);
	$result->bindValue(":super2FirstName", $_POST['super2FirstName'], PDO::PARAM_STR);
	$result->bindValue(":super2LastName", $_POST['super2LastName'], PDO::PARAM_STR);
	$result->bindValue(":super2LastName", $_POST['super2LastName'], PDO::PARAM_STR);
	$result->bindValue(":super1mail", $_POST['super1mail']);
	$result->bindValue(":super2mail", $_POST['super2mail']);
	$result->bindValue(":program", $_POST['program'], PDO::PARAM_STR);
	$result->bindValue(":room", $_POST['room'], PDO::PARAM_STR);
	$result->bindValue(":scholarship", $_POST['scholarship'], PDO::PARAM_STR);
	$result->bindValue(":gta", $_POST['gta'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=profileEdit.php?studentID='.$_GET['studentID'].'"></head><body>';
?>