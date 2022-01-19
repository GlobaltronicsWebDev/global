<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>pogi si ron</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>         
<body>
<div class="container">
    <img src="1.jpg">
    
    <h2>Github!</h2>
    <form action="connect.php" method="POST">
        <div class="form-group">
            <label "FName">FIRSTNAME:</label>
            <input type="FName" class="form-control" id="FirstName" placeholder="ENTER YOUR FIRSTNAME" name="FirstName">
            <label "FName">MIDDLENAME:</label>
            <input type="MName" class="form-control" id="MiddleName" placeholder="ENTER YOUR MIDDLENAME" name="MiddleName">
            <label "LName">LASTNAME:</label>
            <input type="LName" class="form-control" id="LastName" placeholder="ENTER YOUR LASTNAME" name="LastName">
            <label "Email">YOUR EMAIL:</label>
            <input type="Email" class="form-control" id="Email" placeholder="ENTER YOUR EMAIL ADDRESS" name="Email">
            <label "Bday">BIRTHDAY:</label>
            <input type="Birthday" class="form-control" id="Birthday" placeholder="MM/DD/YYYY" name="Birthday">
            <label "address">ADDRESS:</label>
            <input type="address" class="form-control" id="address" placeholder="ENTER YOUR ADDRESS" name="address">
            <label "designation">DESIGNATION:</label>
            <input type="designation" class="form-control" id="Email" placeholder="DESIGNATION" name="designation">
            <label "company">COMPANY:</label>
            <input type="company" class="form-control" id="company" placeholder="COMPANY" name="company">
            <label "phonenumber">PHONE NUMBER:</label>
            <input type="phone" class="form-control" id="phone" placeholder= "PHONE NUMBER" name="PhoneNumber">
    
            <button type="submit" class="btn btn-default">DONATE</button>
        </div>
    </form>
</div>  
</body>
</html>