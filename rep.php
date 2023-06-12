<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $matricule = $_POST['Matricule'];
    $cout = $_POST['cout_reparation'];
    $date_reparation = $_POST['date_reparation'];
    $type_reparation = $_POST['type_reparation'];
    $observation = $_POST['observation'];

    // Insert the data into t_rep table
    $sql = "INSERT INTO t_rep (Mat, Cout, Date_R, type_R, Observ) VALUES ('$matricule', '$cout', '$date_reparation', '$type_reparation', '$observation')";
    $conn->query($sql);

    // Redirect back to the main page
    header("Location: index.html");
}

$conn->close();
?>
