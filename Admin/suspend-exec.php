<?php
include("conn.php");
if($_GET['cs'] == 1)
$sql = "update logs set acce = 0 where id = ?";
else
$sql = "update logs set acce = 1 where id = ?";
echo $sql;
$stmt = $coni->prepare($sql);
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
header("location: list-employees.php");
?>
