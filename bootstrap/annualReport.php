<?php include_once 'header.php'; ?>

<!-- Annual Report Information -->
<div class="menu">
<?php
	echo '<form class="well" id="form" action="annualReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" method="post">';
	$annualReport = $_GET['annualReport'];
	$result = $db->prepare('select '.$annualReport. ' from form where studentID ='.$_GET['studentID']);
	$result->execute();
	$result = $result->fetch();
	if($result[$annualReport]){
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
        echo '<a href="annualReportEdit?studentID='.$result['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-primary right">Edit</a>';
    echo '</div>';
    echo '</div> <!-- /report -->';
		echo '</form>';
	}
?>
</div>


<?php include_once 'footer.php'; ?>