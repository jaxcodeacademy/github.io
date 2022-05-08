<? session_start();

if(isset($_GET['token'])) {
include 'jca_functions.php';
// get parent id
// set to SESSION
?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Jax Code Academy Account</title>
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
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="landing-page">   
     
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Jax</span><span class="text-bold">Code </span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Summer Coding Bootcamp Hosted at the University of North Florida</p>
                    <p>Learn coding and <i class="fa fa-heart"></i> web development</p>
                </div><!--//tagline-->
                <div class="social-container">
                    <div class="twitter-tweet">
                    <? if(isset($_SESSION['student_id'])) { ?>
                     <a href="profile.php" style="color:#ffffff;text-transform: lowercase;" class="btn btn-xs btn-info">My Profile</a>  <a href="logout.php" style="color:#ffffff;text-transform: lowercase;" class="btn btn-xs btn-success">Logout</a>
                     <?  } else { ?>
                     <a href="register.php" class="btn btn-info">Create Account</a>
                     <a href="index.php" class="btn btn-success">Login</a>
                     <? } ?>
    
                    </div><!--//tweet-->
                    <div class="fb-like" data-href="http://jaxcodeacademy.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>            
                 </div><!--//social-container-->
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section">
            <div class="container">
            <? if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }?>

<?        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT token FROM bootcamp_students WHERE token='{$_GET['token']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row['token'] == $_GET['token']) {
       $switch='1';
       } else {
       $switch='0';
       }
    }
} else {
    $switch='0';
}
$conn->close();               
?>         

                

<? if($switch == '1') { ?> 
<p class="text-center">Enter a new Password.</p>

<form action="newpassword_update.php" method="POST">
 <div class="form-group">
   <label for="pwd">New Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Minimum 8 characters, including 1 capital, 1 number" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <div class="form-group">
  <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="Reenter password" required>
  </div>
<input type="hidden" name="token" value="<?=$_GET['token']?>">
<button type="submit" class="btn btn-default">Update Password</button>
</form>
<? } else {
echo "Invalid Token";
} ?>
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
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 
<? } ?>
