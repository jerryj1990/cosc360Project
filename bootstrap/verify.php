<?php
	include 'functions.php';
	$result = $db->prepare("SELECT studentID,role FROM user WHERE ID = :uid AND password = :upass");
	$result->bindValue(":uid", $_POST['uid'], PDO::PARAM_STR);
	$result->bindValue(":upass", $_POST['upass'], PDO::PARAM_STR);
	$result->execute();
	$result = $result->fetch();
	if (!empty($result)) {
		session_start();
		$_SESSION['ID'] = $result['studentID'];
		$_SESSION['role'] = $result['role'];
		if($_SESSION['role']==1)
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=students.php"></head></html>';
		if($_SESSION['role']==0)
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=profile.php"></head></html>';
	} else 
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=login.php?failed"></head></html>';
?>