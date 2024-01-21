<?php
session_start();
include('conn.php');
$sql = "SELECT count(*) as total from fichier_etudiant";
$result = mysqli_query($coni, $sql);
$row = mysqli_fetch_array($result);
$count = $row['total']+1;
$target_dir = "fichier_etudiant/";
$id = $_POST["id"];
$fn = $_POST["fn"];

$new_name = $id."_etufile_".$count.".pdf"; // New file name
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
    $sql1 = "INSERT INTO fichier_etudiant(nom_fichier_etudiant, date_fichier_etudiant,id_etudiant)
    VALUES ('$fn',CURDATE(),'$id')";
    if (mysqli_query($coni, $sql1)) {
      $sql2 = "UPDATE dossier SET statut_interne = 1 WHERE id = '$id'";
      if (mysqli_query($coni, $sql2)) {
        header("location: dossiers-a-envoyé.php");
      } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($coni);
      }
    } else {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($coni);
    }
    header("location: home.php");
  }
}