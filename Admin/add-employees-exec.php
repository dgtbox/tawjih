<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["mail"];
    $tel = $_POST["telephone"];
    $adresse = $_POST["adress"];
    $ville = $_POST["ville"];
    include("conn.php");

    $sql = "INSERT INTO employe(nom, prenom, email, tel, adresse, ville)
    VALUES ('$nom','$prenom','$email','$tel','$adresse','$ville')";
    if (mysqli_query($coni, $sql)) {
//echo("<script>window.location.replace('index.php/')</script>");
header('location: list-employees.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($coni);
}

// Close the database connection
mysqli_close($coni);
}
?>  