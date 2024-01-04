<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    include("conn.php");

    $sql = "INSERT INTO ecole(nom, adresse)
    VALUES ('$nom','$adresse')";
    if (mysqli_query($coni, $sql)) {
//echo("<script>window.location.replace('index.php/')</script>");
header('location: list-ecole.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

// Close the database connection
mysqli_close($coni);
}
?>  