<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('location: login.php');

}
include("conn.php");
$sql = "SELECT * FROM logs WHERE id = ?";
$stmt = mysqli_prepare($coni, $sql);
mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
?>