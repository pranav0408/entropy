<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "mysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// $fetch = "select * from medical where uname='pranav0408' ";
// $result = $conn->query($fetch);
// $row = $result->fetch_assoc();

// echo $row['mob'];
?>