<?php include_once 'header.php'; ?>

<div class="menu">
    <?php
        echo '<form class="well" id="form" action="profile.php?studentID='.$_GET['studentID'].'">';
        $result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
        $result->execute();
        $result = $result->fetch();
    ?>
    <div id="profileInfo">
        <!-- profile.php sub-menu -->
        <ul class="nav nav-pills" id="subMenu">
            <li><a onclick="loadInnerProfile(<?php echo $_GET['studentID']; ?>)">Profile</a></li>
            <?php
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