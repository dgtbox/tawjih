<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $CIN = $_POST["cin"];
    include("conn.php");
    $stmt = $coni->prepare("INSERT INTO employe(nom, prenom, CIN) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $nom, $prenom, $CIN);
    $stmt->execute();
    $lastId = $coni->insert_id;
    $login = $nom . $lastId;
    $pass = password_hash($nom . $lastId, PASSWORD_DEFAULT);
    $stat = 3;
    $stmt = $coni->prepare("INSERT INTO logs (log, pass, idrelate, stat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $login, $pass, $lastId, $stat);
    $stmt->execute();
    header("location: list-employees.php");
}