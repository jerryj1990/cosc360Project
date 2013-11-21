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
			<?php echo '<h1>Profile of '.$_GET['studentID'].'</h1>';?>
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
    <?php echo '<form class="well" id="form" action="updateProfile.php?studentID='.$_GET['studentID'].'" method="post">';?>
		<?php
			$result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
			$result->execute();
			$result = $result->fetch();
		?>
		<p>Student ID</p>
		<?php
			echo '<input type="text" class="span3" placeholder="'.$result['studentID'].'"/>';
		?>
        <br>
        <p>Name</p>
        <input type="text"  name="firstName" value="<?php echo $result['firstName']?>"/> &nbsp;
        <input type="text"  name="lastName"	value="<?php echo $result['lastName']?>"/>
        <br>
        
        <p>Degree</p>
		<?php
			if($result['degree']=="PHD"){
				echo '<input type = "radio" name = "degree" value = "PHD" checked> PHD';
				echo '<input type = "radio" name = "degree" value = "MSC" > MSC';
			}
			else{
				echo '<input type = "radio" name = "degree" value = "PHD" > PHD';
				echo '<input type = "radio" name = "degree" value = "MSC" checked> MSC';
			}
		?>
        <br><br>
        
        <p>Supervisors</p>
        <input type="text"  name="super1FirstName" value="<?php echo $result['super1FirstName']?>""/> &nbsp;
        <input type="text" name="super1LastName" value="<?php echo $result['super1LastName']?>""/>
        <br><p></p>
        <input type="text"  name="super2FirstName" value="<?php echo $result['super2FirstName']?>"/> &nbsp;
        <input type="text"  name="super2LastName" value="<?php echo $result['super2LastName']?>"/>
        <br>
        
        <p>Supervisors' emails</p>
        <input type="text"  name="super1mail" value="<?php echo $result['super1mail']?>"/>
        <br><p></p>
        <input type="text"  name="super2mail" value="<?php echo $result['super2mail']?>"/>
        <br>
        
        <p>Program</p>
		<?php
			if($result['program']=="IGSO"){
				echo '<input type = "radio" name = "program" value = "IGSO" checked> IGSO';
				echo '<input type = "radio" name = "program" value = "IGS" > IGS';
				echo '<input type = "radio" name = "program" value = "MATH" > MATH';
			}
			if($result['program']=="IGS"){
				echo '<input type = "radio" name = "program" value = "IGSO"> IGSO';
				echo '<input type = "radio" name = "program" value = "IGS" checked> IGS';
				echo '<input type = "radio" name = "program" value = "MATH" > MATH';
			}
			if($result['program']=="MATH"){
				echo '<input type = "radio" name = "program" value = "IGSO"> IGSO';
				echo '<input type = "radio" name = "program" value = "IGS" > IGS';
				echo '<input type = "radio" name = "program" value = "MATH" checked> MATH';
			}
		?>
        <br><br>
        
        <p>Room</p>
        <input type="text"  name="room" value="<?php echo $result['room']?>"/>
        <br>
        
        <p>Scholarship</p>
        <input type="text"  name="scholarship" value="<?php echo $result['scholarship']?>"/>
        <br>
        
        <p>GTA</p>
        <input type="text"  name="gta" value="<?php echo $result['gta']?>"/>
        <br>

        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
	
      </div>


</body>
</html>
