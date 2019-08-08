<?php
SESSION_start();
//$_SESSION['user1'];
//$_SESSION['pass'];
SESSION_unset();
SESSION_destroy();
echo"<h1><center>Logged Out</center></h1>";
exit();
?>