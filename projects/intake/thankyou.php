<!DOCTYPE html>
<html>
<head>

<title>Dr. Fitzmeyer's Clinic</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Nav Bar -->
<nav class="navbar navbar-inverse" style="background-color:#000000;">
  <div class="container-fluid">
    <div class="navbar-header text-center">
      <a class="navbar-brand" href="#" style="color:#ffffff;">Dr. Fitzmeyer's Code Clinic</a>
    </div>
  </div>
</nav>
<!-- /Nav Bar -->


<!-- Page Title -->
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2>You Are Registered</h2><br><br>
<p style="font-size:28px;">Thank you for signing in. Please return the tablet, take a seat, and you will be called as soon as possible.</p>
</div>
</div></div>
<!-- /Page Title -->

<?php
if(isset($_POST['newpatientintake'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthmonth = $_POST['birthmonth'];
$birthday = $_POST['birthday'];
$birthyear = $_POST['birthyear'];
$ethnicity = $_POST['ethnicity'];
$race = $_POST['race'];
$gender = $_POST['gender'];
$street = $_POST['street'];
$unit = $_POST['unit'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$maritalstatus = $_POST['maritalstatus'];
$numberofchildren = $_POST['numberofchildren'];


$servername = "localhost";
$username = "sfitzmeyer";
$password = "sfitzmeyer";
$dbname = "jaxcode911";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO checkin (firstname,lastname,birthmonth,birthday,birthyear,ethnicity,race,gender,street,unit,city,state,zipcode,phone,email,maritalstatus,numberofchildren)
VALUES ('{$firstname}','{$lastname}','{$birthmonth}','{$birthday}','{$birthyear}','{$ethnicity}','{$race}','{$gender}','{$street}','{$unit}','{$city}','{$state}','{$zipcode}','{$phone}','{$email}','{$maritalstatus}','{$numberofchildren}')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} // if is set newpatientintake/submit

?>







<br><br>
<div class="clearfix"></div>

<!-- Sticky Footer with Submit Button -->
<style>
.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: #000000;
padding: 10px;
color: white;
text-align: center;
}
</style>

<div class="footer text-center">
<form action="index.php" method="POST">
<button type="submit" name="newpatientintake" class="btn btn-success">Back</button>
</form>
</div>
<!-- /Sticky Footer with Submit Button -->


<!-- Javascript Libraries-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>