<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];

    // Query the t_vehicule table
    $sql = "SELECT * FROM t_vehicule WHERE Mat LIKE '%$searchTerm%' OR Marque LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Vehicule Results:</h2>";
        echo "<table>";
        echo "<tr><th>Matricule</th><th>Marque</th><th>Carburant</th><th>P_P</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Mat'] . "</td>";
            echo "<td>" . $row['Marque'] . "</td>";
            echo "<td>" . $row['Carb'] . "</td>";
            echo "<td>" . $row['P_P'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No vehicule results found";
    }

    // Query the t_doc table
    $sql = "SELECT * FROM t_doc WHERE Mat LIKE '%$searchTerm%' OR type_doc LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Document Results:</h2>";
        echo "<table>";
        echo "<tr><th>Matricule</th><th>Type Document</th><th>Date Document</th><th>Date Expiration</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Mat'] . "</td>";
            echo "<td>" . $row['type_doc'] . "</td>";
            echo "<td>" . $row['date_doc'] . "</td>";
            echo "<td>" . $row['D_Exp'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No document results found";
    }

    // Query the t_rep table
    $sql = "SELECT * FROM t_rep WHERE Mat LIKE '%$searchTerm%' OR type_R LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Reparation Results:</h2>";
        echo "<table>";
        echo "<tr><th>Matricule</th><th>Cout</th><th>Date Reparation</th><th>Type Reparation</th><th>Observation</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Mat'] . "</td>";
            echo "<td>" . $row['Cout'] . "</td>";
            echo "<td>" . $row['Date_R'] . "</td>";
            echo "<td>" . $row['Type_R'] . "</td>";
            echo "<td>" . $row['Observ'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No reparation results found";
    }
}

$conn->close();
?>
