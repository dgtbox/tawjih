<?php
    session_start();
    if($_SESSION["stat"]== 9)
    {
        header('location: homee.php');
    }
    if($_SESSION["stat"]== 8)
    {
        header('location: home-parents.php');
    }
    if($_SESSION["stat"]== 7)
    {
        header('location: home-prof.php');
    }
    if($_SESSION["stat"]< 3)
    {
        header('location: admin/home.php');
    }
    if($_SESSION["stat"]== 3)
    {
        header('location: employees\dossiers-a-envoyé.php');
    }
    if($_SESSION["stat"]== 4)
    {
        header('location: etudients\pages/home.php');
    }

 ?>