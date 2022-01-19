<?php
    $dbServername = 'localhost';
    $dbUsername = 'u553953718_globaltronics';
    $dbPassword = 'Scinort.2021';
    $dbName = 'u553953718_testingglobal';

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Birthday = $_POST['Birthday'];
    $Address = $_POST['Address'];
    $Designation = $_POST['Designation'];
    $Company = $_POST['Company'];
    $PhoneNumber = $_POST['PhoneNumber'];

    //Database connect
    $conn = new mysqli('localhost','u553953718_globaltronics','Scinort.2021','u553953718_testingglobal');
    if ($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection_failed :".$conn->connect_error);
    }else
    $stmt = $conn->prepare("INSERT INTO donate(FirstName,MiddleName,LastName,Email,Birthday,Address,Designation,Company,PhoneNumber)
    values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssi",$FirstName,$MiddleName,$LastName,$Email,$Birthday,$Address,$Designation,$Company,$PhoneNumber);
    $stmt->execute();
    echo "Donate Successfully...gufujfbbf.";
    $stmt->close();
    $conn->close();
?>