<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $matricule = $_POST['Matricule'];
    $marque = $_POST['Marque'];
    $carburant = $_POST['Carbur'];
    $p_p = $_POST['Pascal'];

    // Insert the data into t_vehicule table
    $sql = "INSERT INTO t_vehicule (Mat, Marque, Carb, P_P) VALUES ('$matricule', '$marque', '$carburant', '$p_p')";
    $conn->query($sql);

    // Redirect back to the main page
    header("Location: index.html");
}

$conn->close();
?>
