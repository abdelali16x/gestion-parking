<?php
include 'db_connect.php';

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to retrieve data from t_vehicule table
$sql = "SELECT * FROM t_vehicule";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output the data in a table format
    echo "<table>
            <tr>
                <th>Matricule</th>
                <th>Marque</th>
                <th>Carburant</th>
                <th>Pascal</th>
            </tr>";
    
    // Iterate over the rows of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Mat'] . "</td>
                <td>" . $row['Marque'] . "</td>
                <td>" . $row['Carb'] . "</td>
                <td>" . $row['P_P'] . "</td>
            </tr>";
    }
    
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();

?>
