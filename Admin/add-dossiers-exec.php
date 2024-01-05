<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_etudiant = $_POST["nom1"];
    $id_ecole = $_POST["nom2"];
    $choix1 = $_POST["choix1"];
    $choix2 = $_POST["choix2"];
    $choix3 = $_POST["choix3"];
    $statut_interne = $_POST["statutint"];
    $statut_externe = $_POST["statutext"];
    $date_depot = $_POST["datedepot"];
    $date_reponse = $_POST["daterepon"];
    $date_reponse_externe = $_POST["datereponext"];
    include("conn.php");

    $sql = "INSERT INTO dossier(id_etudiant, id_ecole, choix1, choix2, choix3, statut_interne, statut_externe, date_depot, date_reponse, date_reponse_externe)
    VALUES ('$id_etudiant','$id_ecole', '$choix1','$choix2','$choix3','$statut_interne','$statut_externe','$date_depot','$date_reponse','$date_reponse_externe')";
    if (mysqli_query($coni, $sql)) {
//echo("<script>window.location.replace('index.php/')</script>");
header('location: list-dossiers.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

// Close the database connection
mysqli_close($coni);
}
?>  