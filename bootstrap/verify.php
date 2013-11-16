<?php
	include 'functions.php';
	$result = $db->prepare("SELECT StudentID FROM user WHERE loginID = :uid AND password = :upass");
	$result->bindValue(":uid", $_POST['uid'], PDO::PARAM_STR);
	$result->bindValue(":upass", $_POST['upass'], PDO::PARAM_STR);
	$result->execute();
	$result = $s->fetch();
	if (!empty($result)) {
		$_Session['ID'] = $result;
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=' . SITE_ROOT . 'profile.php"></head></html>';
	} else 
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=' . SITE_ROOT . 'login.php?failed"></head></html>';
?>