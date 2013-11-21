<?php
	include 'functions.php';
	if($_GET['annualReport']=="annualReport1"){
	$result = $db->prepare("UPDATE annualReport1 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport2"){
	$result = $db->prepare("UPDATE annualReport2 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport3"){
	$result = $db->prepare("UPDATE annualReport3 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport4"){
	$result = $db->prepare("UPDATE annualReport4 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport5"){
	$result = $db->prepare("UPDATE annualReport5 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
	if($_GET['annualReport']=="annualReport6"){
	$result = $db->prepare("UPDATE annualReport6 SET gradID=:gradID,status=:status,startDate=:startDate,endDate=:endDate,due=:due,submitting=:submitting,submitted=:submitted,resent=:resent WHERE studentID = :id");
	$result->bindValue(":id", $_GET['studentID'], PDO::PARAM_STR);
	$result->bindValue(":gradID", $_POST['gradID'], PDO::PARAM_STR);
	$result->bindValue(":status", $_POST['status'], PDO::PARAM_STR);
	$result->bindValue(":startDate", $_POST['startDate'], PDO::PARAM_STR);
	$result->bindValue(":endDate", $_POST['endDate'], PDO::PARAM_STR);
	$result->bindValue(":due", $_POST['due'], PDO::PARAM_STR);
	$result->bindValue(":submitting", $_POST['submitting'], PDO::PARAM_STR);
	$result->bindValue(":submitted", $_POST['submitted'], PDO::PARAM_STR);
	$result->bindValue(":resent", $_POST['resent'], PDO::PARAM_STR);
	$result->execute();
	echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="3;URL=annualReportEdit.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"></head><body>';
	}
?>