<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tite = $_POST["titre"];
    $idecole = $_POST["nom1"];
    $date_debut = $_POST["datedebut"];
    $date_fin = $_POST["datefin"];
    include("conn.php");

    $sql = "INSERT INTO ecole_cand_preiod(id_ecole,tite, date_debut, date_fin)
    VALUES ('$idecole','$tite','$date_debut','$date_fin')";
    if (mysqli_query($coni, $sql)) {
        $last_id = mysqli_insert_id($coni);
        $sql = "SELECT * FROM etudiant";
        $result = mysqli_query($coni, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $id_etudiant = $row['id'];
            $idcand = $last_id;
            $sq = "SELECT * FROM ecole_cand_preiod WHERE id = '$idcand'";
            $result1 = mysqli_query($coni, $sq);
            $row1 = mysqli_fetch_array($result1);
            $id_ecole = $row1['id_ecole'];
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
        }
        
        header('location: list-dossiers-non-traite.php');
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($coni);
    }

    // Close the database connection
    mysqli_close($coni);
}
