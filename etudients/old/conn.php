<?php
$host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "twjh";

  

  $coni = mysqli_connect($host, $user, $password, $dbname);
  if (!$coni) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>