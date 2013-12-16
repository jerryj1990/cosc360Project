<?php include_once 'header.php'; 

// This page is loaded into students.php with an AJAX call. A studentID is sent with the AJAX call.
// This page includes the main submenu which includes Profile and Annual Reports 1-6.

// This file contains 2 AJAX calls to load the profile or report, a content container, and the submenu.

?>

<div class="menu">
    <?php
        echo '<form class="well" id="form" action="profile.php?studentID='.$_GET['studentID'].'">';
        $result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
        $result->execute();
        $result = $result->fetch();
    ?>
    <!--
    All code within profileInfo is loaded into students.php
    -->
    <div id="profileInfo">
        <!-- profile.php sub-menu -->
        <ul class="nav nav-pills" id="subMenu">
            <li><a onclick="loadInnerProfile(<?php echo $_GET['studentID']; ?>)">Profile</a></li>
            <?php
            // The above line creates the "Profile" link into the submenu, which calls loadInnerProfile of the studentID that is passed into the page
            // The below loop does the same thing for Annual Reports 1 through 6
                for($i = 1; $i <= 6; $i++){
                    echo'<li><a onclick="loadInnerReport('.$_GET['studentID'].','.$i.')">Annual Report '.$i.'</a></li>';
            }
            ?>
        </ul>

        <!-- Loads in profile by default -->
        <script>
        $(document).ready(function(){
            var id = $('.nav-pills > li > a').attr("onclick");
            id = id.substring(17,25);
            loadInnerProfile(id);
        });
        
        // This AJAX call loads in all the profile information of the student and places it into the div #innerContent
        // It takes the studentID as a parameter, and is called when clicking the "Profile" button on the submenu
        // It also removes any "active" tags from the menu and adds one to "profile". What this does is highlight 
        // the currently chosen option in the submenu with a blue background so that it is clear which page is currently laoded in
        function loadInnerProfile(student){
            //remove all "CLASS=ACTIVE" from <li> items on subMenu
            for(var i = 0; i < 7; i++){
                $('.nav-pills > li:nth-child('+(i+1)+')').removeClass('active');
            }
            //add "CLASS=ACTIVE" to approriate tag
            $('.nav-pills > li:first').addClass('active');
            //load profileinfo into #innerContent
            $('#innerContent').load("profileInfo.php?studentID="+student);
        }

        // This AJAX call is identical to the one above, but instead loads in the appropriate annual report
        function loadInnerReport(student, num){
            //remove all "CLASS=ACTIVE" from <li> items on subMenu
            for(var i = 0; i < 7; i++){
                $('.nav-pills > li:nth-child('+(i+1)+')').removeClass('active');
            }
           //add "CLASS=ACTIVE" to approriate tag
            $('.nav-pills > li:nth-child('+(num+1)+')').addClass('active');
            //load annualReport into #innerContent
            $('#innerContent').load("annualReport.php?studentID="+student+"&annualReport=annualReport"+num+" #report");
        }
        
        </script>

        <div id="innerContent"></div>

        </form>
    </div> <!-- /profileInfo -->
</div> <!-- /menu -->

<?php include_once 'footer.php'; ?>