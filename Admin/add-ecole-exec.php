<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    include("conn.php");

    $stmt = $coni->prepare("INSERT INTO ecole(nom, adresse) VALUES (?, ?)");
    $stmt->bind_param("ss", $nom, $adresse);

    if ($stmt->execute()) {
        header('location: list-ecole.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $coni->close();
}
?>