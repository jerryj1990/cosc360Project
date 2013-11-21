<?php
	include 'functions.php';
	$result = $db->prepare("UPDATE form SET annualReport3=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport3 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
?>