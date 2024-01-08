<?php
// Start PHP script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the request method is POST

    $nom = $_POST["nom"];
    // Retrieve 'nom' from the POST data

    $prenom = $_POST["prenom"];
    // Retrieve 'prenom' from the POST data

    $CIN = $_POST["cin"];
    // Retrieve 'cin' from the POST data

    include("conn.php");
    // Include the 'conn.php' file which presumably establishes a database connection

    $stmt = $coni->prepare("INSERT INTO employe(nom, prenom, CIN) VALUES (?, ?, ?)");
    // Prepare an SQL statement to insert 'nom', 'prenom', and 'CIN' into the 'employe' table

    $stmt->bind_param('sss', $nom, $prenom, $CIN);
    // Bind the 'nom', 'prenom', and 'CIN' variables to the SQL statement

    $stmt->execute();
    // Execute the SQL statement

    $lastId = $coni->insert_id;
    // Retrieve the ID of the last inserted record

    $login = $nom . $lastId;
    // Create a 'login' string by concatenating 'nom' and 'lastId'

    $pass = password_hash($nom . $lastId, PASSWORD_DEFAULT);
    // Create a hashed password using 'nom' and 'lastId'

    $stat = 3;
    // Set 'stat' to 3

    $stmt = $coni->prepare("INSERT INTO logs (log, pass, idrelate, stat) VALUES (?, ?, ?, ?)");
    // Prepare an SQL statement to insert 'log', 'pass', 'idrelate', and 'stat' into the 'logs' table

    $stmt->bind_param("ssii", $login, $pass, $lastId, $stat);
    // Bind the 'login', 'pass', 'lastId', and 'stat' variables to the SQL statement

    $stmt->execute();
    // Execute the SQL statement

    $stmt->close();
    // Close the SQL statement

    $coni->close();
    // Close the database connection
}
// End of the POST request check
?>
// End of PHP script