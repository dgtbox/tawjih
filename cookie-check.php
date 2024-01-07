<?php
session_start();
if (isset($_COOKIE["loguser"])&&!isset($_SESSION['id'])) {
    $cookie_value = $_COOKIE["loguser"];
    $expiration = time() + 86400;
    if ($expiration < time()) {
        setcookie("loguser", "", time() - 3600);
        setcookie("logpass", "", time() - 3600);

    } else {
        // cookie has not expired
        header("Location: login-exec.php?cookie=1");    
    }
}
    elseif(!isset($_COOKIE["loguser"])&&isset($_SESSION['id']))
    {
        
    }
    elseif(!isset($_COOKIE["loguser"])&&!isset($_SESSION['id']))
    {

    }
    else
    {
        header("Location: crossroads.php");    
    }
?>