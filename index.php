<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ticketing System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>         
<body>
<div class="container">
    <!-- <div class="pic"><img src="1.jpg"></div> -->
    <h2>Globaltronics IT Ticketing System</h2>
    <form action="connect.php" method="POST">
        <div class="form-group">
            <label "FName">FIRSTNAME</label>
            <input type="FirstName" class="form-control" id="FirstName" placeholder="ENTER YOUR FIRSTNAME" name="FirstName">
            <label "FName">MIDDLENAME:</label>
            <input type="MiddleName" class="form-control" id="MiddleName" placeholder="ENTER YOUR MIDDLENAME" name="MiddleName">
            <label "LName">LASTNAME:</label>
            <input type="LastName" class="form-control" id="LastName" placeholder="ENTER YOUR LASTNAME" name="LastName">
            <label "Email">YOUR EMAIL:</label>
            <input type="Email" class="form-control" id="Email" placeholder="ENTER YOUR EMAIL ADDRESS" name="Email">
            <label "Bday">BIRTHDAY:</label>
            <input type="Birthday" class="form-control" id="Birthday" placeholder="MM/DD/YYYY" name="Birthday">
            <label "address">ADDRESS:</label>
            <input type="Address" class="form-control" id="Address" placeholder="ENTER YOUR ADDRESS" name="Address">
            <label "designation">DESIGNATION:</label>
            <input type="Designation" class="form-control" id="Designation" placeholder="DESIGNATION" name="Designation">
            <label "company">COMPANY:</label>
            <input type="Company" class="form-control" id="Company" placeholder="COMPANY" name="Company">
            <label "phonenumber">PHONE NUMBER:</label>
            <input type="PhoneNumber" class="form-control" id="PhoneNumber" placeholder= "PHONE NUMBER" name="PhoneNumber">
            <button type="submit" class="btn btn-default">SUBMIT</button>
        </div>
    </form>
</div>  
</body>
</html>