<?php
$servername = "localhost";
$database = "u553953718_testingglobal";
$username = "u553953718_globaltronics";
$password = "Scinort.2021";

$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Birthday = $_POST['Birthday'];
$Address = $_POST['Address'];
$Designation = $_POST['Designation'];
$Company = $_POST['Company'];
$PhoneNumber = $_POST['PhoneNumber'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
$stmt = $conn->prepare("INSERT INTO donate(FirstName,MiddleName,LastName,Email,Birthday,Address,Designation,Company,PhoneNumber)values(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssi",$FirstName,$MiddleName,$LastName,$Email,$Birthday,$Address,$Designation,$Company,$PhoneNumber);
$stmt->execute();
echo "Connected successfully";
$stmt->close();
$conn->close();
mysqli_close($conn);
?>