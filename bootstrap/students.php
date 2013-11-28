<?php include_once 'header.php'; ?>

<?php 
	if($_SESSION['role']==0){
		header('Location: profile.php');
	}
?>

<!--Form-->
<div class="menu">
<form class="well">
    <?php
		$result = $db->prepare('select user.studentID,firstName,lastName from user,form where form.studentID=user.studentID AND role = 0');
		$result->execute();
		$result = $result->fetchAll();
        //Create Student List
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

    function loadProfile(student){
        $.get('profile.php?studentID='+student, function(response){
            var data = $(response);
            var input = data.find("#profileInfo");
            $("#content").html(input.html());

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