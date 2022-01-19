<?php
    $dbServername = 'localhost';
    $dbUsername = 'globaltronics';
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
    $PhoneNumber = $_POST['Phone'];

    //Database connect
    $conn = new mysqli('localhost','donate','Scinort.2021','testingglobal');
    if ($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection_failed :".$conn->connect_error);
    }else
    $stmt = $conn->prepare("insert into donate(FirstName,MiddleName,LastName,Email,Birthday,Address,Designation,Company,PhoneNumber)
    values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssi",$FirstName,$MiddleName,$LastName,$Email,$Birthday,$Address,$Designation,$Company,$PhoneNumber);
    $stmt->execute();
    echo "Donate Successfully...gufujfbbf.";
    $stmt->close();
    $conn->close();
?>