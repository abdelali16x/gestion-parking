<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $matricule = $_POST['Matricule'];
    $type_doc = $_POST['type_doc'];
    $date_doc = $_POST['date_doc'];
    $date_exp = $_POST['date_exp'];

    // Insert the data into t_doc table
    $sql = "INSERT INTO t_doc (Mat, type_doc, date_doc, D_Exp) VALUES ('$matricule', '$type_doc', '$date_doc', '$date_exp')";
    $conn->query($sql);

    // Redirect back to the main page
    header("Location: index.html");
}

$conn->close();
?>
