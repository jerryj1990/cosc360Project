<?php
session_start();
session_destroy();
echo "The session has ended. <a href='login.php'>Go back</a>";
?>