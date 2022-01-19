<?php
$servername = "localhost";
$database = "u553953718_testingglobal";
$username = "u553953718_globaltronics";
$password = "Scinort.2021";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>