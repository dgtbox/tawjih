<?php
session_start();
include('conn.php');
$target_dir = "../employees/acuse/";
$id = $_POST["id"];
$fileextension = strtolower(pathinfo($_FILES["fl"]["name"], PATHINFO_EXTENSION));
$new_name = $id."_acuse".".".$fileextension; // New file name
$target_file = $target_dir . $new_name;
$uploadOk = 1;

if ($_FILES["fl"]["size"] > 25165824) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($fileextension != "pdf" && $fileextension != "jpg") {
  echo "Sorry, only PDF and JPG files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fl"]["tmp_name"], $target_file)) {
    $sql = "UPDATE dossier SET statut_interne = '3' , acuse = '$fileextension' where id = '$id'";
    mysqli_query($coni, $sql);
    header("location: dossiers-a-envoyé.php");
  }
}
?>