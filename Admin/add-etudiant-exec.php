<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $CIN = $_POST["cin"];
    $massar = $_POST["massar"];
    include("conn.php");

    $sql = "INSERT INTO etudiant(nom, prenom, CIN, massar)
    VALUES ('$nom','$prenom','$CIN','$massar')";
    if (mysqli_query($coni, $sql)) {
//echo("<script>window.location.replace('index.php/')</script>");
header('location: list-etudient.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

// Close the database connection
mysqli_close($coni);
}
?>  