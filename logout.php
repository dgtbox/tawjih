<?php
 session_start();
 session_destroy();
 setcookie("loguser", "", time() - 3600);
 setcookie("logpass", "", time() - 3600);
 header('location: login.php');
?>