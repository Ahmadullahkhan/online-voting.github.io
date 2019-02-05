<?php
session_start();
session_destroy();
unset($_SESSION['ttt_login']);   
<a href="logout1.php">log out1</a>
?>