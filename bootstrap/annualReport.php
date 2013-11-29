<?php include_once 'header.php'; ?>
<<<<<<< HEAD
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!-- Annual Report Information -->
<div class="menu">
<?php
	session_start();
	echo '<form class="well" id="form" action="annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" method="post">';
	$annualReport = $_GET['annualReport'];
	$result = $db->prepare('select '.$annualReport. ' from form where studentID ='.$_GET['studentID']);
	$result->execute();
	$result = $result->fetch();
	if($result[$annualReport]==1){
		$result = $db->prepare('select * from '.$_GET['annualReport'].' where studentID ='.$_GET['studentID']);
		$result->execute();
		$result = $result->fetch();

		/*
			This keeps the HTML looking pretty, even though it looks a bit off here
		*/

		echo '
<!-- profile.php sub-menu -->
    <ul class="nav nav-pills">
        <li><a href="profile.php?studentID='.$_GET['studentID'].'">Profile</a></li>';
            for($i = 1; $i <= 6; $i++){
                echo'<li><a href="annualReport.php?studentID='.$_GET['studentID'].'&annualReport=annualReport'.$i.'">Annual Report '.$i.'</a></li>';
        }
    	echo '</ul>';

        echo '<div id="report">';
		echo '
<!-- Student ID -->
    <div class="row">
        <div class="span3">
            <p><strong>Student ID</strong></p>
        </div>';
		echo $result['gradID'];
    echo '</div>';

    echo '
<!-- Status -->
    <div class="row">
        <div class="span3">
            <p><strong>Status</strong></p>
        </div>';
		echo $result['status'];
    echo '</div>';

    echo '
<!-- Start Date -->
    <div class="row">
        <div class="span3">
            <p><strong>Start Date</strong></p>
        </div>';
        echo $result['startDate'];
    echo '</div>';

    echo '
<!-- End Date -->
    <div class="row">
        <div class="span3">
            <p><strong>End Date</strong></p>
        </div>';
        echo $result['endDate'];
    echo '</div>';

    echo '
<!-- Due Date -->
    <div class="row">
        <div class="span3">
            <p><strong>Due Date</strong></p>
        </div>';
        echo $result['due'];
    echo '</div>';

    echo '
<!-- Submitting -->
    <div class="row">
        <div class="span3">
            <p><strong>Submitting</strong></p>
        </div>';
        echo $result['submitting'];
    echo '</div>';

    echo '
<!-- Submitted -->
    <div class="row">
        <div class="span3">
            <p><strong>Submitted</strong></p>
        </div>';
        echo $result['submitted'];
    echo '</div>';

    echo '
<!-- Resent -->
    <div class="row">
        <div class="span3">
            <p><strong>Resent</strong></p>
        </div>';
        echo $result['resent'];
        if($_SESSION['role']==1){
            echo '<a href="annualReportEdit?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-primary right">Edit</a>';
        }
    echo '</div>';
    echo '</div> <!-- /report -->';
	}
	else{
		
		echo '<div id ="report">';
		echo '<center>';
		echo 'This report does not exist yet!<br>';
		echo '<a href="createReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-large btn-block btn-primary">Create Report</a>';
		echo '</center>';
		echo '</div>';
	}
	
	echo '</form>';
?>
</div>
=======

<!-- Annual Report Information -->
<div class="menu">
<?php
    $loginInfo = $db->prepare("SELECT studentID,role FROM user WHERE studentID = :uid");
    $loginInfo->bindValue(":uid", $_GET['studentID'], PDO::PARAM_STR);
    $loginInfo->execute();
    $loginInfo = $loginInfo->fetch();
    if (!empty($loginInfo)) {
        session_start();
        $_SESSION['role'] = $loginInfo['role'];
    }
	echo '<form class="well" id="form" action="annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" method="post">';
	$annualReport = $_GET['annualReport'];
	$result = $db->prepare('select '.$annualReport. ' from form where studentID ='.$_GET['studentID']);
	$result->execute();
	$result = $result->fetch();
	if($result[$annualReport]){
		$result = $db->prepare('select * from '.$_GET['annualReport'].' where studentID ='.$_GET['studentID']);
		$result->execute();
		$result = $result->fetch();
>>>>>>> ac5e1896f6ee36be216042d3d37e28a2b05b1a97

		/*
			This keeps the HTML looking pretty, even though it looks a bit off here
		*/

<<<<<<< HEAD
=======
		echo '
<!-- profile.php sub-menu -->
    <ul class="nav nav-pills">
        <li><a href="profile.php?studentID='.$_GET['studentID'].'">Profile</a></li>';
            for($i = 1; $i <= 6; $i++){
                echo'<li><a href="annualReport.php?studentID='.$_GET['studentID'].'&annualReport=annualReport'.$i.'">Annual Report '.$i.'</a></li>';
        }
    	echo '</ul>';

        echo '<div id="report">';
		echo '
<!-- Student ID -->
    <div class="row">
        <div class="span3">
            <p><strong>Student ID</strong></p>
        </div>';
		echo $result['gradID'];
    echo '</div>';

    echo '
<!-- Status -->
    <div class="row">
        <div class="span3">
            <p><strong>Status</strong></p>
        </div>';
		echo $result['status'];
    echo '</div>';

    echo '
<!-- Start Date -->
    <div class="row">
        <div class="span3">
            <p><strong>Start Date</strong></p>
        </div>';
        echo $result['startDate'];
    echo '</div>';

    echo '
<!-- End Date -->
    <div class="row">
        <div class="span3">
            <p><strong>End Date</strong></p>
        </div>';
        echo $result['endDate'];
    echo '</div>';

    echo '
<!-- Due Date -->
    <div class="row">
        <div class="span3">
            <p><strong>Due Date</strong></p>
        </div>';
        echo $result['due'];
    echo '</div>';

    echo '
<!-- Submitting -->
    <div class="row">
        <div class="span3">
            <p><strong>Submitting</strong></p>
        </div>';
        echo $result['submitting'];
    echo '</div>';

    echo '
<!-- Submitted -->
    <div class="row">
        <div class="span3">
            <p><strong>Submitted</strong></p>
        </div>';
        echo $result['submitted'];
    echo '</div>';

    echo '
<!-- Resent -->
    <div class="row">
        <div class="span3">
            <p><strong>Resent</strong></p>
        </div>';
        echo $result['resent'];
        if($_SESSION['role']==0){
            echo '<a href="annualReportEdit?studentID='.$result['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-primary right">Edit</a>';
        }
    echo '</div>';
    echo '</div> <!-- /report -->';
		echo '</form>';
	}
?>
</div>


>>>>>>> ac5e1896f6ee36be216042d3d37e28a2b05b1a97
<?php include_once 'footer.php'; ?>