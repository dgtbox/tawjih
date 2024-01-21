<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $CIN = $_POST["cin"];
    $massar = $_POST["massar"];
    $emp = $_POST["emp"];
    include("conn.php");

    $stmt = $coni->prepare("INSERT INTO etudiant(nom, prenom, CIN, massar,emp_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssi', $nom, $prenom, $CIN, $massar,$emp);
    $stmt->execute();

    $lastId = $coni->insert_id;
    $login = $nom . $lastId;
    $pass = password_hash($nom . $lastId, PASSWORD_DEFAULT);
    $stat = 4;

    $stmt = $coni->prepare("INSERT INTO logs (log, pass, idrelate, stat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $login, $pass, $lastId, $stat);
    $stmt->execute();

    $stmt->close();
    $coni->close();
    header("location: ../success.php?log=$login");
}
?>