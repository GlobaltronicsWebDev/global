<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = '';
    $dbName = "donate";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    // $FirstName = $_POST['FirstName'];
    // $MiddleName = $_POST['MiddleName'];
    // $LastName = $_POST['LastName'];
    // $Email = $_POST['Email'];
    // $Birthday = $_POST['Birthday'];
    // $Address = $_POST['Address'];
    // $Designation = $_POST['Designation'];
    // $Company = $_POST['Company'];
    // $PhoneNumber = $_POST['PhoneNumber'];

    // //Database connect
    // $conn = new mysqli('localhost','root','password','donate');
    // if ($conn->connect_error){
    //     echo "$conn->connect_error";
    //     die("Connection_failed :".$conn->connect_error);
    // }else
    // $stmt = $conn->prepare("insert into donate(FirstName,MiddleName,LastName,Email,Birthday,Address,Designation,Company,PhoneNumber)
    // values(?,?,?,?,?,?,?,?,?,?)");
    // $stmt->bind_param("ssssssssi",$FirstName,$MiddleName,$LastName,$Email,$Birthday,$Address,$Designation,$Company,$PhoneNumber);
    // $stmt->execute();
    // echo "Donate Successfully....";
    // $stmt->close();
    // $conn->close();

?>