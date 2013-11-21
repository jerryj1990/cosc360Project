<?php
	include 'functions.php';
	if($_GET['annualReport']=="annualReport1"){
	$result = $db->prepare("UPDATE form SET annualReport1=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport1 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport2"){
	$result = $db->prepare("UPDATE form SET annualReport2=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport2 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport3"){
	$result = $db->prepare("UPDATE form SET annualReport3=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport3 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport4"){
	$result = $db->prepare("UPDATE form SET annualReport4=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport4 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport5"){
	$result = $db->prepare("UPDATE form SET annualReport5=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport5 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport6"){
	$result = $db->prepare("UPDATE form SET annualReport6=1 WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $db->prepare("INSERT INTO annualReport6 (studentID) VALUES (:studentID)");
	$result->bindValue(":studentID", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
?>