<?php
 session_start();
 session_destroy();
 setcookie("loguser", "", time() - 3600, "/");
 setcookie("logpass", "", time() - 3600, "/");

 unset($_COOKIE["loguser"]);
 unset($_COOKIE["logpass"]);


 header("Location: login.php");
?>