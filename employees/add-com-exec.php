<?php
include('conn.php');
$sql = "update dossier set com = '".$_POST['com']."', statut_interne = 2 where id = '".$_POST['idd']."'";
if (mysqli_query($coni, $sql)) {
    header("location: dossiers-en-attente.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}
?>