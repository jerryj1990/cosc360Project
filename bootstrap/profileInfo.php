<!--Retrieve the general information from the database-->
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<?php
    include_once 'functions.php';
<<<<<<< HEAD
    
=======
    $loginInfo = $db->prepare("SELECT studentID,role FROM user WHERE studentID = :uid");
    $loginInfo->bindValue(":uid", $_GET['studentID'], PDO::PARAM_STR);
    $loginInfo->execute();
    $loginInfo = $loginInfo->fetch();
    if (!empty($loginInfo)) {
        session_start();
        $_SESSION['role'] = $loginInfo['role'];
    }
>>>>>>> ac5e1896f6ee36be216042d3d37e28a2b05b1a97
    $result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
    $result->execute();
    $result = $result->fetch();
?>

<!-- Profile Information -->

<!-- Student ID -->
    <div class="row">
        <div class="span3">
            <p><strong>Student ID</strong></p>
        </div>
        <?php echo $result['studentID']; ?>
    </div>

<!-- Name -->
    <div class="row">
        <div class="span3">
            <p><strong>Name</strong></p>
        </div>
        <?php echo $result['firstName'];?> &nbsp;
        <?php echo $result['lastName'];?>
    </div>

<!-- Degree -->
    <div class="row">
        <div class="span3">
            <p><strong>Degree</strong></p>
        </div>
        <?php echo $result['degree'];?>

    </div>

    <br>

<!-- Supervisors -->
    <div class="row">
        <div class="span3">
            <p><strong>Supervisors</strong></p>
        </div>
        <?php echo $result['super1FirstName'];?>&nbsp;
        <?php echo $result['super1LastName'];?>
        <br>
        <?php echo $result['super2FirstName'];?>&nbsp;
        <?php echo $result['super2LastName'];?>
    </div>

    <br>

<!-- Supervisor Emails -->
    <div class="row">
        <div class="span3">
            <p><strong>Supervisor Emails</strong></p>
        </div>
        <?php echo $result['super1mail'];?>
        <br>
        <?php echo $result['super2mail'];?>
    </div>

    <br>

<!-- Program -->
    <div class="row">
        <div class="span3">
            <p><strong>Program</strong></p>
        </div>
        <?php echo $result['program'];?>
    </div>

<!-- Room -->
    <div class="row">
        <div class="span3">
            <p><strong>Room</strong></p>
        </div>
        <?php echo $result['room'];?>
    </div>

<!--  Scholarship -->
    <div class="row">
        <div class="span3">
            <p><strong>Scholarship</strong></p>
        </div>
        <?php echo $result['scholarship'];?>
    </div>

<!-- GTA -->
    <div class="row">
        <div class="span3">
            <p><strong>GTA</strong></p>
        </div>
        <?php echo $result['gta'];?>
        <?php
<<<<<<< HEAD
		session_start();
        if($_SESSION['role']==1){
=======
        if($_SESSION['role']==0){
>>>>>>> ac5e1896f6ee36be216042d3d37e28a2b05b1a97
            echo '<a href="profileEdit?studentID='.$result['studentID'].'" class="btn btn-primary right">Edit</a>';
        }
        ?>
    </div>