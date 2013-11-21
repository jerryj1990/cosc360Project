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
                <a href="#" class="brand">UBC Grad Manager</a>
                <ul role="navigation" class="nav">
				<?php echo '<li><a href="profile.php?studentID='.$_GET['studentID'].'">Profile</a></li>';?>
                            <?php
								for($i = 1; $i <= 6; $i++){
										echo'<li><a href="annualReport.php?studentID='.$_GET['studentID'].'&annualReport=annualReport'.$i.'">annualReport'.$i.'</a></li>';
								}
							
							?>
					<li><a href="logout.php">Logout</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Form-->
		 <div class="menu">
		<?php echo '<form class="well" id="form" action="profile.php?studentID='.$_GET['studentID'].'">';?>
		<?php
				$result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
				$result->execute();
				$result = $result->fetch();
		?>
		<p>Student ID</p>
		<?php
			echo '<textarea rows="1" class="uneditable-input">'.$result['studentID'].'</textarea>';
		?>
        <br>
        <p>Name</p>
        <?php echo '<textarea rows="1" class="uneditable-input">'.$result['firstName'].'</textarea>';?> &nbsp;
        <?php echo '<textarea rows="1" class="uneditable-input">'.$result['lastName'].'</textarea>';?>
        <br>
        
        <p>Degree</p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['degree'].'</textarea>';?>
        <br><br>
        
        <p>Supervisors</p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super1FirstName'].'</textarea>';?>&nbsp;
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super1LastName'].'</textarea>';?>
        <br><p></p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super2FirstName'].'</textarea>';?>&nbsp;
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super2LastName'].'</textarea>';?>
        <br>
        
        <p>Supervisors' emails</p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super1mail'].'</textarea>';?>
        <br><p></p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['super2mail'].'</textarea>';?>
        <br>
        
        <p>Program</p>
		<?php echo '<textarea rows="1" class="uneditable-input">'.$result['program'].'</textarea>';?>
        <br><br>
        
        <p>Room</p>
        <?php echo '<textarea rows="1" class="uneditable-input">'.$result['room'].'</textarea>';?>
        <br>
        
        <p>Scholarship</p>
        <?php echo '<textarea rows="1" class="uneditable-input">'.$result['scholarship'].'</textarea>';?>
        <br>
        
        <p>GTA</p>
        <?php echo '<textarea rows="1" class="uneditable-input">'.$result['gta'].'</textarea>';?>
    </form>
	
      </div>


</body>
</html>
