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
	<?php 
		session_start(); 
		if(!isset($_SESSION['ID']) && !isset($_SESSION['role'])){
				header('Location: login.php');
			}
	?>
    <div class="menu">
        <div class="navbar navbar-static">
            <div class="navbar-inner">
                <h1>Coordinator</h1>
                <ul role="navigation" class="nav">
				<li><a href="students.php">Students</a></li>
                    <li class="dropdown">
                     <li><a href="#">Annual Reports</a></li>
					<li><a href="logout.php">Logout</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Form-->
		<?php include 'functions.php'; ?>
        <div class="menu">
    <form class="well" id="form">
        <?php
			$result = $db->prepare('select user.studentID,firstName,lastName from user,form where form.studentID=user.studentID AND  role = 0');
			$result->execute();
			$result = $result->fetchAll();
			foreach ($result as $row) {
						echo '<center><table>';
						echo '<tr><td><a href="profileEdit.php?studentID='.$row['studentID'].'">' . $row['firstName'] . ', '. $row['lastName'] .'</td></tr></a></br>'.
						'</table></center>';
					}
		
		?>
    </form>
      </div>


</body>
</html>
