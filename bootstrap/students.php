<?php include_once 'header.php'; ?>

<?php 
	if($_SESSION['role']==0){
		header('Location: profile.php');
	}

    // This page is the main page. All information can be accessed from this page, and most important pages
    // are embedded within this one.

    // The page contains the student list for coordinators, a section of AJAX code which loads the appropriate
    // profile.php page, and the main container.
?>
<div class="menu">
<form class="well">
    <?php
		$result = $db->prepare('select user.studentID,firstName,lastName from user,form where form.studentID=user.studentID AND role = 0');
		$result->execute();
		$result = $result->fetchAll();
        // Create Student List
        // Retrieves all students and adds them to the list along with the proper function call to load
        // that student's profile information
        echo '<div class="studentNav"> <!-- studentNav -->';
        echo '<ul class="nav nav-list">';
        echo '<div class="nav-header">Student List</div>';
		foreach ($result as $row) {
			echo '<li><a onclick="loadProfile('.$row['studentID'].')">' . $row['lastName'] . ', '. $row['firstName'] .'</a></li>';
		}
        echo '</ul>';
        echo '</div> <!-- /studentNav -->';
	?>

    <!-- Loads in profile.php of first student on list by default -->
    <script>
    $(document).ready(function(){
        var sid = $('.nav-list > li > a:first-child').attr("onclick");
        sid = sid.substring(12,20);
        loadProfile(sid);
    });

    // AJAX call to load student.php.
    // Takes studentID in as a parameter. Passes that parameter into profile.php
    // and then embeds all code from profile.php within #profileInfo into the #content div on this page.
    function loadProfile(student){
        $.get('profile.php?studentID='+student, function(response){
            var data = $(response);
            var input = data.find("#profileInfo");
            $("#content").html(input.html());

            // This is required to make sure that the AJAX call loads the javascript as well so that
            // profile.php can still access its javascript.
            var node;
            for(var i=0; i<data.length; i++){
                node = $(data.get(i));
                if(node.prop("tagName")=="script"){
                    eval(node.html());
                }
            }
        });
    }
    </script>

    <div id="content"></div>

</form>
</div>

<?php include_once 'footer.php'; ?>