<? session_start(); ?>

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
                        <span class="text-highlight">Jax</span><span class="text-bold">Code <em>Kids</em></span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Summer Coding Bootcamp Hosted at the University of North Florida <i class="fa fa-code"></i></p>
                    <p>Let The Fun Begin!</p>
                </div><!--//tagline-->
                <div class="social-container">
                    <div class="twitter-tweet">
                    <? if(isset($_SESSION['parent_id'])) { ?>
                     <a href="profile.php" style="color:#ffffff;text-transform: none;" class="btn btn-xs btn-info btnstyle0">My Profile</a>
                     &nbsp;&nbsp;  
                     <a href="logout.php" style="color:#ffffff;text-transform: none;" class="btn btn-xs btn-success btnstyle0">Logout</a>
                     <?  } else { ?>
                     <a href="register.php" class="btn btn-info">Create Account</a>
                     <? } ?>
    
                    </div><!--//tweet-->
                    <div class="fb-like" data-href="http://jaxcodeacademy.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>            
                 </div><!--//social-container-->
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
            <? if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }?>
                <!--h2 class="title">Let The Fun Begin!</h2-->
                <div class="intro">

<?php
//$cookie_name = "jaxcode";
if(isset($_SESSION['parent_id'])) {
?> 
                    <!--p>Coding Bootcamp Summer 2020</p-->
                   
                </div><!--//intro-->
                
                

                
                <div id="cards-wrapper" class="cards-wrapper row">
                
                
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Bootcamp Details</h3>
                            <p class="intro">Get ready for bootcamp.</p>
                            <a class="link" href="start.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                    <div class="item item-blue item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-user-plus"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Enrollment</h3>
                            <p class="intro">Manage and Register Your Kids.</p>
                            <a class="link" href="add_student.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                     <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_creditcard"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Tuition</h3>
                            <p class="intro">View tuition balance and make a payment. </p>
                            <a class="link" href="myaccount.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                     
                    
                    
                    
                    
                </div><!--//cards--><br><br><br><br>
                
 <?
 
 
} else {

 if(!empty($errormessage)) {
 echo '<br><br><div style="color:red;" class="well">';
 echo $errormessage;
 echo '</div><br><br>';
 }
?>
  <p>Welcome to Jax Code Academy. <br>Login to your account.</p>
  <script>
   var cookieExist = $.cookie("jaxcode");
            if(!cookieExist == "null" ){
                alert("Cookie Is Null");

            }
  </script>
  <form action="login.php" method="POST">
  <div class="form-group">
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Login</button>
</form>
<br><small><a href="recoverpassword.php">forgot password?</a></small>
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
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

