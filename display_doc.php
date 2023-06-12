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

// Query the database to retrieve data from t_doc table
$sql = "SELECT * FROM t_doc";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output the data in a table format
    echo "<table>
            <tr>
                <th>Matricule</th>
                <th>Type Document</th>
                <th>Date Document</th>
                <th>Date Expiration</th>
            </tr>";
    
    // Iterate over the rows of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Mat'] . "</td>
                <td>" . $row['type_doc'] . "</td>
                <td>" . $row['date_doc'] . "</td>
                <td>" . $row['D_Exp'] . "</td>
            </tr>";
    }
    
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
