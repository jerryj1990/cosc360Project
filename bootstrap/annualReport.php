<!DOCTYPE html>
<html>
    <head>
        <meta charsest="utf-8"/>
        <title>Form</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <style type="text/css">
                p{
                    width: 130px;
                    float: left;
                    text-align: left;
                    margin-right: 15px;
                    display: block;
                }
                .menu{
                    margin: 20px;
                }
            
            </style>
</head>
<body>
    <!--Drop down menu-->
		<?php include 'functions.php'; ?>
	<?php 
		session_start(); 
		if(!isset($_SESSION['ID']) && !isset($_SESSION['role'])){
				header('Location: login.php');
			}
	?>
    <div class="menu">
        <div class="navbar navbar-static">
            <div class="navbar-inner">
			<?php echo '<h1>'.$_GET['annualReport'].' for '.$_GET['studentID'].'</h1>';?>
                <ul role="navigation" class="nav">
				<li><a href="students.php">Students</a></li>
				<?php
					for($i = 1; $i <= 6; $i++){
							echo'<li><a href="annualReport.php?studentID='.$_GET['studentID'].'&annualReport=annualReport'.$i.'">annualReport'.$i.'</a></li>';
					}
				
				?>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

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
				echo '<div class="menu">';
				echo '<form class="well" id="form" action="updateReport.php?studentID='.$_GET['studentID'].'" method="post">';
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
				echo '</form></div></form>';
			}
			else{
				echo 'there is no report';
				echo '<a href="createReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'"> start Report</a>';
			}
		?>
	
      </div>


</body>
</html>
