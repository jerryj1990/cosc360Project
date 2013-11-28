<?php include_once 'header.php'; ?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php 
	if($_SESSION['role']==0){
		header('Location: profile.php');
	}
?>

<!--Form-->
<div class="menu">
	<?php
		echo '<form class="well" id="form" action="updateReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" method="post">';
		$annualReport = $_GET['annualReport'];
		$result = $db->prepare('select '.$annualReport. ' from form where studentID ='.$_GET['studentID']);
		$result->execute();
		$result = $result->fetch();
		if($result[$annualReport]){
			$result = $db->prepare('select * from '.$_GET['annualReport'].' where studentID ='.$_GET['studentID']);
			$result->execute();
			$result = $result->fetch();
			echo '<p>GradID</p>';
			echo '<input type="text"  name="gradID" value="'.$result['gradID'].'"/> &nbsp;<br>';
			echo '<p>Status</p>';
			echo '<input type="date" name="status" value="'.$result['status'].'"><br>';
			echo '<p>Start</p>';
			echo '<input type="date" name="startDate" value="'.$result['startDate'].'"><br>';
			echo '<p>End Date</p>';
			echo '<input type="date" name="endDate" value="'.$result['endDate'].'"><br>';
			echo '<p>Due</p>';
			echo '<input type="date" name="due" value="'.$result['due'].'"><br>';
			echo '<p>Submitting</p>';
			echo '<input type="date" name="submitting" value="'.$result['submitting'].'"><br>';
			echo '<p>Submitted</p>';
			echo '<input type="date" name="submitted" value="'.$result['submitted'].'"><br>';
			echo '<p>Resent</p>';
			echo '<input type="date" name="resent" value="'.$result['resent'].'"><br>';
			echo '<br><br><button class="btn btn-primary">Submit</button>';
			echo '</form>';
		}
		else{
			echo '<center>';
			echo 'This report does not exist yet!<br>';
			echo '<a href="createReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-large btn-block btn-primary">Create Report</a>';
			echo '</center>';
		}
	?>
</div>

<?php include_once 'footer.php'; ?>