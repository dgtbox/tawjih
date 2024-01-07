<?php
session_start();
include('conn.php');
$target_dir = "acuse/";
$id = $_POST["id"];
$new_name = $id."_acuse".".pdf"; // New file name
$target_file = $target_dir . $new_name;
$uploadOk = 1;
$fileextension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["fl"]["size"] > 25165824) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($fileextension != "pdf") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fl"]["tmp_name"], $target_file)) {
    $sql = "UPDATE dossier SET statut_interne = '3' where id = '$id'";
    mysqli_query($coni, $sql);
    header("location: dossiers-a-envoyé.php");
  }
}