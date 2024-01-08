<?php
session_start();
global $id, $user, $stat, $idr;
if (isset($_GET['cookie'])) {
  $usr = $_COOKIE['loguser'];
  include('conn.php');
  $sql = "SELECT * FROM logs WHERE log = ?";
  $stmt = mysqli_prepare($coni, $sql);
  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $i = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    $i++;
    $GLOBALS['id'] = $row['id'];
    $GLOBALS['idr'] = $row['idrelate'];
    $GLOBALS['user'] = $row['log'];
    $GLOBALS['stat'] = $row['stat'];
    $hashed_password = $row['pass'];
  }
  if ($i == 1) {
    if (password_verify($_COOKIE['logpass'], $hashed_password)) {
      $_SESSION['id'] = $GLOBALS['id'];
      $_SESSION['stat'] = $GLOBALS['stat'];
      $_SESSION['idr'] = $GLOBALS['idr'];
      header('location: crossroads.php');
    } else {
      setcookie("loguser", "", time() - 3600, "/");
      setcookie("logpass", "", time() - 3600, "/");     
      unset($_COOKIE["loguser"]);
      unset($_COOKIE["logpass"]);
     
      header('location: login.php?wp=10');
    }
  } else {
    header('location: login.php?wl=10');
  }
  mysqli_close($coni);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usr = $_POST['log'];
  $pass = $_POST['pass'];
  include('conn.php');
  $sql = "SELECT * FROM logs WHERE log = ?";
  $stmt = mysqli_prepare($coni, $sql);
  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $i = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    $i++;
    $GLOBALS['id'] = $row['id'];
    $GLOBALS['idr'] = $row['idrelate'];
    $GLOBALS['user'] = $row['log'];
    $GLOBALS['stat'] = $row['stat'];
    $hashed_password = $row['pass'];
  }
  if ($i == 1) {
    if (password_verify($pass, $hashed_password)) {
      setcookie("loguser", $usr, time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie("logpass", $pass, time() + (86400 * 30), "/");    
      $_SESSION['id'] = $GLOBALS['id'];
      $_SESSION['stat'] = $GLOBALS['stat'];
      $_SESSION['idr'] = $GLOBALS['idr'];
      header('location: crossroads.php');
    } else {
      header('location: login.php?wp=10');
    }
  } else {
    header('location: login.php?wl=10');
  }
  mysqli_close($coni);
}
