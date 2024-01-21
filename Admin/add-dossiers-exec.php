<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_etudiant = $_POST["nom1"];
    $idcand = $_POST["nom2"];
    include("conn.php");
    $sq = "SELECT * FROM ecole_cand_preiod WHERE id = '$idcand'";
    $result = mysqli_query($coni, $sq);
    $row = mysqli_fetch_array($result);
    $id_ecole = $row['id_ecole'];
    $statut_interne = 0;
    $statut_externe = 0;
    $date_reponse = null;
    $date_reponse_externe = null;

    $sql = "INSERT INTO dossier(id_etudiant, id_ecole, statut_interne, statut_externe, date_depot, date_reponse, date_reponse_externe,id_cand_period)
    VALUES ('$id_etudiant','$id_ecole','$statut_interne','$statut_externe',CURDATE(),'$date_reponse','$date_reponse_externe',$idcand)";
    if (mysqli_query($coni, $sql)) {
header('location: list-dossiers-non-traite.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

mysqli_close($coni);
}
?>  