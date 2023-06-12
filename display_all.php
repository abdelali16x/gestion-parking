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

// Query the database to retrieve data from t_vehicule, t_doc, and t_rep tables
$sql = "SELECT t_vehicule.Mat, t_vehicule.Marque, t_vehicule.Carb, t_vehicule.P_P, t_doc.type_doc, t_doc.date_doc, t_doc.D_Exp, t_rep.Cout, t_rep.Date_R, t_rep.type_R, t_rep.Observ
        FROM t_vehicule
        LEFT JOIN t_doc ON t_vehicule.Mat = t_doc.Mat
        LEFT JOIN t_rep ON t_vehicule.Mat = t_rep.Mat";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output the data in a table format
    echo "<table>
            <tr>
                <th>Mat</th>
                <th>Marque</th>
                <th>Carb</th>
                <th>P_P</th>
                <th>Type Doc</th>
                <th>Date Doc</th>
                <th>D_Exp</th>
                <th>Cout</th>
                <th>Date_R</th>
                <th>Type_R</th>
                <th>Observ</th>
            </tr>";

    // Iterate over the rows of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Mat'] . "</td>
                <td>" . $row['Marque'] . "</td>
                <td>" . $row['Carb'] . "</td>
                <td>" . $row['P_P'] . "</td>
                <td>" . $row['type_doc'] . "</td>
                <td>" . $row['date_doc'] . "</td>
                <td>" . $row['D_Exp'] . "</td>
                <td>" . $row['Cout'] . "</td>
                <td>" . $row['Date_R'] . "</td>
                <td>" . $row['type_R'] . "</td>
                <td>" . $row['Observ'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
