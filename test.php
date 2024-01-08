<?php
session_start();
echo $_SESSION['id'];
echo $_COOKIE["loguser"];
echo $_COOKIE["logpass"];
?>