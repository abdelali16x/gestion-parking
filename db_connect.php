<?php
$host = "localhost"; // Replace with your host name if different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "parc";

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
