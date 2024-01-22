<?php
session_start();
if (isset($_COOKIE["loguser"])&&!isset($_SESSION['id'])) {
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
        session_destroy();
    }
    elseif(!isset($_COOKIE["loguser"])&&!isset($_SESSION['id']))
    {

    }
    else
    {
        header("Location: home.php");    
    }
?>