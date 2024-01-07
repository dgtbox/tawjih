<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tite = $_POST["nom"];
    $date_debut = $_POST["datedebut"];
    $date_fin = $_POST["datefin"];
    include("conn.php");

    $sql = "INSERT INTO ecole_cand_preiod(tite, date_debut, date_fin)
    VALUES ('$tite','$date_debut','$date_fin')";
    if (mysqli_query($coni, $sql)) {
//echo("<script>window.location.replace('index.php/')</script>");
header('location: list-ecole-periode.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

// Close the database connection
mysqli_close($coni);
}
?>  