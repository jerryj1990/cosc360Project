<?php
session_start();
session_destroy();
echo "The session has end. <a href='login.php'>Go back</a>";
?>