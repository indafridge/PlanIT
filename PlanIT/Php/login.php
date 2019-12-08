<?php

$servername = "planitserver.database.windows.net";
$username = "planit";
$password = "Password123";
$dbname = "PlanITdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, email, password FROM login.Table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. $row["email"]. $row["password"]. br>;
    }
} else {
    echo '0 results';
}
$conn->close();

?>
