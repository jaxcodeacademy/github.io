<? 
$breadcrumb = 'My Profile';
$bodycolor = "body-pink";
include 'header.php'; 
?>
<link href="winmarkltd-BootstrapFormHelpers-d4201db/dist/css/bootstrap-formhelpers.css" rel="stylesheet">
<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><span aria-hidden="true" class="icon icon_document"></span> My Profile</h1>
<!--div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div--><br><br>
</div><!--//doc-header-->
<div class="doc-body">
<div class="doc-content">
<div class="content-inner">

<section id="myaccount-myinfo" class="doc-section">

<? if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }?>

<h2 class="section-title">Basic Information</h2><br>
<div id="gettingstarted-myinfo"  class="section-block">

<?
// 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bootcamp_students WHERE student_id = '{$_SESSION['student_id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>

<form action="profile_update.php" method="POST">
<div class="form-group">
<label for="firstname">First name:</label>
<input type="firstname" name="firstname" class="form-control" id="firstname" value="<?=$row['firstname']?>" required>
</div>
<div class="form-group">
<label for="lastname">Last Name:</label>
<input type="lastname" name="lastname" class="form-control" id="lastname" value="<?=$row['lastname']?>" required>
</div>
<div class="form-group">
<label for="email">Email address:</label>
<input type="email" name="email" class="form-control" id="email" value="<?=$row['email']?>" required>
</div>
<div class="form-group">
<label for="phone">Phone:</label>
<input type="text" name="phone" placeholder="Telephone with area code" class="form-control input-medium bfh-phone required"  data-format="ddd-ddd-dddd" value="<?=$row['phone']?>">

</div>
<div class="form-group">
<label for="webfactionUsername">Opalstack Username:</label>
<input type="text" class="form-control" id="webfactionusername" placeholder="Enter Webfaction Username" name="webfactionusername" value="<?=$row['webfactionusername']?>">
</div>
<div class="form-group">
<label for="webfactionPassword">Opalstack Password:</label>
<input type="text" class="form-control" id="webfactionpassword" placeholder="Enter Webfaction Password" name="webfactionpassword" value="<?=$row['webfactionpassword']?>" >
</div>
<div class="form-group">
<label for="portfolio">Portfolio url:</label>
<input type="url" class="form-control" id="portfoliourl" placeholder="http://portfolio.username.webfactional.com" name="portfoliourl" value="<?=$row['portfoliourl']?>" >
</div>

<div class="form-group">
  <label for="sel1">Select Preferred Class Pace:</label>
  <select class="form-control" name="bootcampclass" id="bootcampclass">
  <option value="traditional">Traditional</option>
  <? if($row['bootcampclass'] == 'honors') {
  echo '<option value="honors" selected>Honors</option>';
  } else {
  echo '<option value="honors">Honors</option>';
  }
  ?>
    
    

  </select>
</div>



<button type="submit" class="btn btn-default">Update</button>
</form><br><br>

<?
if($row['internship'] == '1') {
?>


<section id="myaccount-internship" class="doc-section">
<h2 class="section-title">Internship</h2><br>

Start Date: <?=$row['internshipstart']?><br>
End Date: <?=$row['internshipend']?><br>

<?
}
?>
<!--Account created: <?=$row['timestamp']?>-->
<?
}
} else {
echo "0 results";
}
$conn->close();
?>
<br><br><br>
</div><!--//section-block-->





<div id="myaccount-password"  class="section-block">
<h2 class="section-title">Change Password</h2><br><br>
<? 
// 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bootcamp_students WHERE student_id = '{$_SESSION['student_id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<form action="password_update.php" method="POST">
<div class="form-group">
<label for="pwd">New Password:</label>
<input type="password" class="form-control" name="password" placeholder="Minimum 8 characters, including 1 capital, 1 number" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div>
<div class="form-group">
<label for="pwd">Confirm Password:</label>
<input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="Reenter password" required>
</div>

<button type="submit" class="btn btn-default">Update</button>
</form>
<?
}
} else {
echo "0 results";
}
$conn->close();
?>
<br><br><br>
</div><!--//section-block-->






</section><!--//doc-section-->


</div><!--//content-inner-->
</div><!--//doc-content-->

<div class="doc-sidebar hidden-xs">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu" data-spy="affix">
<li><a class="scrollto" href="#myaccount-myinfo">My Profile</a> </li>
<li><a class="scrollto" href="#myaccount-password">Change Password</a> </li>
</ul><!--//doc-menu-->
</nav>
</div><!--//doc-sidebar-->                 




</div><!--//doc-body-->              
</div><!--//container-->
</div><!--//doc-wrapper-->

<? include 'footerad.php'; ?>

</div><!--//page-wrapper-->

<footer id="footer" class="footer text-center">
<div class="container">
<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
<small class="copyright">Copyright &copy; <a href="https://jaxcodeacademy.com/">Jax Code Academy</a></small>

</div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->          
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
<script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>                                                                
<script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<script src="winmarkltd-BootstrapFormHelpers-d4201db/dist/js/bootstrap-formhelpers.js"></script>
	<script src="winmarkltd-BootstrapFormHelpers-d4201db/js/bootstrap-formhelpers-phone.js"></script>
	<!-- Bootstrap Helpers -->


</body>
</html> 

