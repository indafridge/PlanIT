<?php

/* PHP Data Objects(PDO) Sample Code:   
try {
    $conn = new PDO("sqlsrv:server = tcp:planitserver.database.windows.net,1433; Database = PlanITdb", "planit", "{Password123}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
*/

/*
$username = $_POST['username'];
$password = $POST['password'];

if (!empty($username) || !empty($password)){
    $host = "planitserver.database.windows.net";
    $dbUsername = "planit";
    $dbPassword = "Password123";
    $dbname = "PlanITdb";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $SELECT = "INSERT Into register(email, password) values (?,?)"; 


        }
 else{
     echo " All fields are required ";
        die();
     }

     */

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
        echo "id: " . $row["id"]. $row["email"]. $row["password"]. br>";
    }
} else {
    echo '0 results';
}
$conn->close();
?>