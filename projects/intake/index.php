<!DOCTYPE html>
<html>
<head>

<title>Dr. Fitzmeyer's Code Clinic</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
<h2>New Patient Intake Form</h2>
</div>
</div></div>
<!-- /Page Title -->


<!-- ====Form==== -->

<!-- Patient -->
<div class="container">
<div class="row">
<div class="col-md-6">
<form action="thankyou.php" method="POST">
<div class="form-group">
<table class="table"><caption>Patient</caption><tr><td>
<label for="firstname">First name:</label>
<input type="text" class="form-control" id="firstname" name="firstname" required>
</td><td>
<label for="lastname">Last name:</label>
<input type="text" class="form-control" id="lastname" name="lastname" required>
</td></tr></table>
</div>
<!-- /Patient -->

<!-- DOB-->
<div class="form-group">
<table class="table"><caption>Date of Birth</caption><tr><td>
<label for="birthmonth">Month:</label>
<select class="form-control" id="birthmonth" name="birthmonth" required>
<?php
$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
foreach($months as $month) {
echo '<option value="'.$month.'">'.$month.'</option>';
}
?>
</select>
</td><td>
<label for="birthday">Day:</label>
<select class="form-control" id="birthday" name="birthday" required>
<?php
$x = 1;
while($x <= 31) {
echo '<option value="'.$x.'">'.$x.'</option>';
$x++;
}
?>
</select>
</td>
<td>
<label for="birthyear">Year:</label>
<select class="form-control" id="birthyear" name="birthyear" required>
<?php
$x = 1920;
$year = date('Y');
while($year >= $x) {
echo '<option value="'.$year.'">'.$year.'</option>';
$year--;
}
?>
</select>
</td></tr></table>
</div>
<!-- /DOB --> 


<!-- Self ID -->
<div class="form-group">
<table class="table"><caption>Self Identification</caption><tr><td>
<label for="ethnicity">Ethnicty:</label>
<select class="form-control" id="ethnicity" name="ethnicity" required>
<option value="Not Hispanic">Not Hispanic</option>
<option value="Hispanic">Hispanic</option>
</select>
</td><td>
<label for="race">Race:</label>
<select class="form-control" id="race" name="race" required>
<?php
$races = array("African American", "American Indian", "Alaskan Native", "Asian", "Caucasian", "Native Hawaiian", "Pacific Islander");
sort($races);
foreach($races as $race) {
echo '<option value="'.$race.'">'.$race.'</option>';
}
?>

</select>
</td>

<td>
<label for="gender">Gender:</label>
<select class="form-control" id="gender" name="gender" required>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Other">Other</option>

</select>
</td></tr></table>
</div>
<!-- Self ID -->


</div><!-- /col-6 -->




<div class="col-md-6">

<!-- Address -->
<div class="form-group">
<table class="table"><caption>Address</caption><tr>
<td colspan="2">
<label for="street">Street:</label>
<input type="text" class="form-control" id="street" name="street" required>
</td><td>
<label for="unit">Unit:</label>
<input type="text" class="form-control" id="unit" name="unit">
</td>
</tr>
<tr><td>
<label for="city">City:</label>
<input type="text" class="form-control" id="city" name="city" required>
</td><td>
<label for="state">State:</label>
<select class="form-control" id="state" name="state" required>
<?php
$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

sort($states);

foreach($states as $state) {

	  if($state == 'Florida') {
	  echo '<option value="'.$state.'" selected>'.$state.'</option>';

	  } else {
	  echo '<option value="'.$state.'">'.$state.'</option>';
	  }

}
?>
</select>
</td>

<td>
<label for="zipcode">Zipcode:</label>
<input type="number" class="form-control" id="zipcode" name="zipcode" max="99999" required>
</td></tr>
</table>
</div>
<!-- /Address -->

<!-- Contact Info -->
<div class="form-group">
<table class="table"><caption>Contact Info</caption><tr><td>
<label for="phone">Telephone:</label>
<input type="text" class="form-control" id="phone" name="phone" required>
</td><td>
<label for="phone">Email:</label>
<input type="email" class="form-control" id="email" name="email" required>
</td></tr></table>
</div>
<!-- /Contact Info -->

<!-- Family History -->
<div class="form-group">
<table class="table"><caption>Family History</caption><tr><td>
<label for="maritalstatus">Marital Status:</label>
<select class="form-control" id="maritalstatus" name="maritalstatus" required>
<option value="Married">Married</option>
<option value="Single">Single</option>
<option value="Divorced">Divorced</option>
<option value="Separated">Separated</option>
<option value="Widowed">Widowed</option>
</td><td>
<label for="numberofchildren">Number of Children:</label>
<input type="number" class="form-control" id="numberofchildren" min="0" max="12" name="numberofchildren" required>
</td>
</tr></table>
</div>
<!-- /Family History -->

</div><!-- /col-6 -->

</div></div><!-- /row/container -->

<br><br>&nbsp;<br><br>
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
<button type="submit" name="newpatientintake" class="btn btn-success">Register</button>
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