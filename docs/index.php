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
    
    <!-- PayPal BEGIN -->
  <script>
      ;(function(a,t,o,m,s){a[m]=a[m]||[];a[m].push({t:new Date().getTime(),event:'snippetRun'});var f=t.getElementsByTagName(o)[0],e=t.createElement(o),d=m!=='paypalDDL'?'&m='+m:'';e.async=!0;e.src='https://www.paypal.com/tagmanager/pptm.js?id='+s+d;f.parentNode.insertBefore(e,f);})(window,document,'script','paypalDDL','7176e300-217d-4651-9a26-f405e2c3348c');
    </script>
  <!-- PayPal END -->
  
</head> 

<body class="landing-page">   
     
    
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Jax</span><span class="text-bold">Code</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Learn coding and <i class="fa fa-heart"></i> web development</p>
                </div><!--//tagline-->
                <div class="social-container">
                    <div class="twitter-tweet">
                    <? if(isset($_SESSION['student_id'])) { ?>
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
            
            <? if(isset($_SESSION['regmessage'])) { 
            
            $to = "Jax Code Academy <".$_SESSION['email'].">";
           
$subject = "Jax Code Docs Registration";
$txt = "Now that you've registered it's time to login and enroll in coding bootcamp
Go to https://jaxcode.com/docs

Welcome !
--Jax Code Academy Team--
";
$headers = "From: support@jaxcode.com";

mail($to,$subject,$txt,$headers);
            
            
            
            
            
            
            
            echo $_SESSION['regmessage']; unset($_SESSION['regmessage']); }?>
            
            
<!--div style="background-color:yellow;padding: 10px;font-size:18px;">April 19 Coding Bootcamp link for Google Meet: To join the video meeting, click this link: <a href="https://meet.google.com/hpv-zqdk-ehg" target="_blank">https://meet.google.com/hpv-zqdk-ehg</a> </div>  <br><br-->  

<div style="background-color:yellow;padding: 10px;font-size:18px;">Google Meet: To join the Coding Bootcamp via live stream: <a href="https://meet.google.com/bhn-tbtf-djo" target="_blank">https://meet.google.com/bhn-tbtf-djo</a> </div>  <br><br> 


            
            
   <? if(isset($_COOKIE['jaxcodeid']))  { ?>        
            
                National PHP data: <a href="PHP_National_data_appendix.pdf" class="btn btn-info" target="_blank">Download PDF</a><br><br>
                
    <? } ?>
               
<?php
//$cookie_name = "jaxcode";

if(isset($_SESSION['student_id'])) {
?> 
                   
                   
              
                

                
                
                
                
                <div id="cards-wrapper" class="cards-wrapper row">
                
                
                    <div class="item item-green col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Quick Start</h3>
                            <p class="intro">Get ready for bootcamp.</p>
                            <a class="link" href="start.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                    
                    <div class="item item-blue col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-sitemap"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Syllabus</h3>
                            <p class="intro">Syllabus, lessons, and guidance.</p>
                            <a class="link" href="syllabus.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <? 
                    $_SESSION['advanced_course'] = 0;
                    if($_SESSION['advanced_course'] == '1') {?>
                    <div class="item item-purple col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-sitemap"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Senior Web Dev Bootcamp</h3>
                            <p class="intro">Syllabus, lessons, and guidance.</p>
                            <a class="link" href="web_dev_sr.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <? } ?>
                    
                    <!--div class="item item-orange col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-code"></i>
                            </div>
                            <h3 class="title">Bootcamps</h3>
                            <p class="intro">Enroll in Coding Bootcamp.</p>
                            <a class="link" href="bootcamps.php"><span></span></a>
                        </div>
                    </div-->
                    
                     <!--div class="item item-purple col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_creditcard"></span>
                            </div>
                            <h3 class="title">Tuition</h3>
                            <p class="intro">View balance and make a payment. </p>
                            <a class="link" href="myaccount.php"><span></span></a>
                        </div>
                    </div-->
                    
                    <div class="item item-pink col-md-3 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-user"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Profile</h3>
                            <p class="intro">Your Details.</p>
                            <a class="link" href="profile.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                     
                    
                    
                    
                    
                </div><!--//cards-->
                
                
 <?
} else {

 if(!empty($errormessage)) {
 echo '<br><br><div style="color:red;" class="well">';
 echo $errormessage;
 echo '</div><br><br>';
 }
?>
  <p>Welcome to Jax Code Academy. <br>You must be enrolled or a graduate at Jax Code Academy to access.</p>
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

