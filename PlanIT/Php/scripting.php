<?php
/*
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

$sql = "SELECT id, email, password FROM tblRegistration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. $row["email"]. $row["password"]. "br">;
    }
} else {
    echo '0 results';
}
$conn->close();

 
/*
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("college", $connection); // Selecting Database.
$email=$_POST['email1']; // Fetching Values from URL.
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT * FROM registration WHERE email='$email' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
echo "Successfully Logged in...";
}else{
echo "Email or Password is wrong...!!!!";
}
}
mysql_close ($connection); // Connection Closed.
*/

/*
    $serverName = "planitserver.database.windows.net";
    $connectionOptions = array(
        "Database" => "PlanITdb",
        "Uid" => "planit", 
        "PWD" => "Password123" 
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);

*/
?>
