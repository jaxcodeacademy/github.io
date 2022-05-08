<? session_start();

function getUserIpAddr2(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = getUserIpAddr2();
// me 184.175.195.251
// ahole 196.52.84.46
if($ip == '196.52.84.46') {
header("Location: ip.php");
}
if($ip == '196.52.84.29') {
header("Location: ip.php");
}
if($ip == '196.52.84.45') {
header("Location: ip.php");
}
if($ip == '196.52.84.48') {
header("Location: ip.php");
}
if($ip == '196.52.84.19') {
header("Location: ip.php");
}






if(isset($_COOKIE['jaxcodeid'])) {
setcookie("jaxcodeid", "", time() - 3600);
header("Location: loop.php");
}

if(isset($_POST['createaccount'])) {
include 'jca_functions.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$errormessage = '';
$switch = '1';
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['city'] = $_POST['city'];

if($_POST['password'] != $_POST['passwordconfirm']) {
	$errormessage = '<div class="alert alert-danger">
	<strong>Error: </strong> Passwords do not match.</div>';
	$switch = '0';
}

if($_POST['addthis'] != '7') {
	$errormessage = '<div class="alert alert-danger">
	<strong>Error: </strong> Human Test is Incorrect.</div>';
	$switch = '0';
}


if($switch == '1') {
// Check for duplicate registration
$sql = "SELECT * FROM bootcamp_students WHERE email = '{$_POST['email']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $errormessage = '<div class="alert alert-danger">
	<strong>Error: </strong> '.$_POST['email'].' already registered.</div>';
	$switch = '0';
    }
} 
} // if $switch == 1, no errors yet

// get IP 

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = getUserIpAddr();


if($switch == '1') {
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$referredby = filter_var($_POST['referredby'], FILTER_SANITIZE_STRING);
$password = md5($_POST['password']);

$sql = "INSERT INTO bootcamp_students (firstname, lastname , email, phone, city , state, password, ip, referredby)
VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$phone}', '{$city}', '{$_POST['state']}', '{$password}','{$ip}', '{$referredby}')";

if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
	
	$_SESSION['parent_id'] = $last_id;
	// Set cookie for login
	$cookie_name = "jaxcodeid";
	$cookie_value = "granted";
	//setcookie($cookie_name, $cookie_value); // 86400 = 1 day
	
	

	
	$_SESSION['regmessage'] = '<div class="alert alert-success">
	<strong>Success: </strong> You are registered.</div>';
	
    header("Location: index.php");
die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


} // if $switch == 1, no errors yet



}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Jax Code Academy Coding Bootcamp</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="../favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link href="winmarkltd-BootstrapFormHelpers-d4201db/dist/css/bootstrap-formhelpers.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <style>
    
    .colorcss {
    color: #0266bd;
    
    }
    
    .colorcss0 {
    color: dodgerblue;
    
    }
    
    .colorcss1 {
    color: #883bf5;
    
    }
    
    .labelcss {
    font-size: 16px; 
    color: #0266bd;
    
    }
    
    .infocss {
    font-size: 14px; 
    color: black;
    
    }
    
    
    
    </style>
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
</head> 

<body>   
     
    
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center" style="background-color: #192f59;">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Jax</span><span class="text-bold">Code</span>
                    </h1>
                </div><!--//branding-->
                
                <div class="social-container">
                    <div class="twitter-tweet">
    <a href="../" class="btn btn-xs btn-info">Home</a>
    <a href="index.php" class="btn btn-xs btn-success">Login</a>
                    </div><!--//tweet-->
                    <div class="fb-like" data-href="http://jaxcodeacademy.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>            
                 </div><!--//social-container-->
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section">
            <div class="container">

                <div class="intro">
                
                <div style="text-align: center;"><span style="font-size:28px"><span style="color:#000000"><span style="font-family:georgia,times,times new roman,serif">Steps To Complete Enrollment</span></span></span><br /><br/>

<div style="font-size: 16px;">
<br />
<strong><span style="background-color:white; border-radius:20px; border:orange solid 1px; color: orange; padding:5px 11px 5px 11px">1</span></strong>&nbsp; <strong><span style="color:orange;">Create An Account</span> </strong>

&nbsp; &nbsp;&nbsp;<strong><span style="background-color:white; border-radius:20px; border:dodgerblue solid 1px; color:dodgerblue; padding:5px 11px 5px 11px">2</span></strong>&nbsp; <strong><span class="colorcss0">Login</span>&nbsp;</strong>

&nbsp;&nbsp;<strong><span style="background-color:white; border-radius:20px; border:#7917e3 solid 1px; color: #7917e3; padding:5px 11px 5px 11px">3</span></strong>&nbsp; <strong><span class="colorcss1">Select a  Bootcamp</span></strong>

&nbsp;&nbsp;<strong><span style="background-color:white; border-radius:20px; border:#75c181 solid 1px; color: #75c181; padding:5px 11px 5px 11px">4</span></strong>&nbsp; <strong><span style="color:#75c181;">Make a Payment</span></strong>
<br />
&nbsp; 
</div>

</div>

                
                <!--p style="text-align: center;">Then, prepare for bootcamp! ...Read the <a href="Jax-Code-Academy-Student-Handbook.pdf" target="_blank"> Handbook.</a></p><br/><br/><br/-->
                
                <h2 class="title text-center colorcss"><p>Create Your Account</p></h2>
                <div class="text-center"><strong><span style="background-color:white; border-radius:40px; border:orange solid 1px; color: orange; padding:15px 23px 15px 23px;font-size:20px;">1</span></strong></div>
               
                <br/><br/>

<?php
//$cookie_name = "jaxcode";
if(isset($_COOKIE['jaxcodeid'])) {
?> 
                    
                   
                </div><!--//intro-->
                
                

                
                
      
 <?
} else {

 if(!empty($errormessage)) {
 echo '<br><br><div style="color:red;" class="well">';
 echo $errormessage;
 echo '</div><br><br>';
 }
?>
 
  <form action="register.php" method="POST">
  <div class="form-group">
  <label for="firstname" class="labelcss">First Name:</label>
    <input oninput="maxLengthCheck(this)" maxlength="10" type="text" class="form-control" id="firstname" name="firstname" placeholder="&nbsp;" value="<? if(isset($_SESSION['firstname'])) { echo $_SESSION['firstname']; } ?>" required>
  </div>
  <div class="form-group">
  <label for="lastname" class="labelcss">Last Name:</label>
    <input oninput="maxLengthCheck(this)" maxlength="16" type="text" class="form-control" id="lastname" name="lastname" placeholder="&nbsp;" value="<? if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; } ?>" required>
  </div>
  <div class="form-group">
  <label for="email" class="labelcss">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="&nbsp;" value="<? if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>" required>
  </div>
  <div class="form-group">
  <label for="phone" class="labelcss">Phone:</label>
    <input type="text" placeholder="Telephone with area code" class="form-control input-medium bfh-phone required"  data-format="ddd-ddd-dddd" id="phone" name="phone" value="<? if(isset($_SESSION['phone'])) { echo $_SESSION['phone']; } ?>" required>
  </div>
  
  
  
    <div class="form-group">
  <label for="city" class="labelcss">City:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="&nbsp;" value="<? if(isset($_SESSION['city'])) { echo $_SESSION['city']; } ?>" required>
  </div>
  <?
  $state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
  


?>
<div class="form-group">
<label for="state" class="labelcss">State:</label>
<select name="state">

<?
foreach($state_list as $state) {
if($state == 'Florida') { ?>
<option value="<?=$state?>" selected><?=$state?></option>
<?
} else {
?>
<option value="<?=$state?>"><?=$state?></option>
<? } } ?>
</select> 
</div>
  

 
  
  
   <div class="form-group">
   <label for="pwd" class="labelcss">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Minimum 8 Characters, Including 1 Capital, 1 Number" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <div class="form-group">
  <label for="pwd2" class="labelcss">Confirm Password:</label>
    <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="Re-enter password" required>
  </div>
  <div class="form-group">
  <label for="referredby" class="labelcss">Referred by:</label>
    <input type="text" class="form-control" id="referredby" name="referredby" placeholder="Optional">
  </div>
  <div class="form-group">
  <label for="test" class="labelcss">Human Test: What is 3 + 4</label>
    <input oninput="maxLengthCheck(this)" maxlength="2" type="text" class="form-control" id="addthis" name="addthis" placeholder="" required>
  </div>
  <br/>
  <button type="submit" class="btn btn-default" name="createaccount"> Create Account</button>
</form>
<script>
function maxLengthCheck(object) {
  if (object.value.length > object.maxLength)
  object.value = object.value.slice(0, object.maxLength)
}
</script>

				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>



<? } ?>        

   </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->

<? include 'footerad.php'; ?>
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Copyright &copy; <a href="https://jaxcode.com/">Jax Code Academy</a></small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script src="winmarkltd-BootstrapFormHelpers-d4201db/dist/js/bootstrap-formhelpers.js"></script>
	<script src="winmarkltd-BootstrapFormHelpers-d4201db/js/bootstrap-formhelpers-phone.js"></script>
	<!-- Bootstrap Helpers -->
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

