<?php
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
include 'jca_functions.php';
?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Jax Code Academy Documentation</title>
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
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
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
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li class="active">Unpaid Internship Contract</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_creditcard"></span> Unpaid Internship Contract</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            
                            <section id="myaccount-myinfo" class="doc-section">
                                <h2 class="section-title">UNPAID INTERNSHIP CONTRACT</h2>
                                
                                
                                <div id="gettingstarted-myinfo"  class="section-block">

<?

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// if agreement is submitted upate record in Database

if(isset($_POST['iagree'])) {

$sql = "UPDATE preregistrations SET internagreement='1',internstartdate = '{$_POST['internstartdate']}' WHERE prereg_id = '{$_COOKIE['jaxcodeid']}'";

if (mysqli_query($conn, $sql)) {

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations, you are now a Jax Code Academy Intern!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}



// Get user data
$sql = "SELECT prereg_id,fullname, internagreement, internstartdate FROM preregistrations where prereg_id = '{$_COOKIE['jaxcodeid']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
        $internagreement = $row["internagreement"];
        $internstartdate = $row["internstartdate"];
        $prereg_id = $row["prereg_id"];
        $fullname = $row["fullname"];

    } // while
} else {
    echo "0 results";
}
$conn->close();


?>

<? if($internagreement == '0') { ?>

<div class="lead">Read this contract and submit it to activate your internship with Jax Code Academy.</div>
<? } else { ?>


  <div style="background-color:yellow;" class="text-center">You agreed to this contact on <?=$internstartdate?>. Go to <a href="myaccount.php">My Account</a></div><br>
 

<? } ?>



<p>
This is an agreement among <strong><?=$fullname?></strong> (“Intern”), and Jax Code Academy
(“Company”). The purpose of this educational internship is for
Intern to learn about Company’s business and to gain valuable insight and experience.
<br><br>
The term of this internship begins on <strong><?=date('m/d/Y')?></strong> and ends when terminated by either party.
<br><br>
Conditions of the Agreement:

<ul>
	<li>The internship is related to an educational purpose and there is no guarantee or expectation that the activity will result in employment with the Company.</li>
	<li>The education received by the Intern from the internship is for the express benefit of the Intern.</li>
	<li>The Intern does not replace or displace any employee of the Company.</li>
	<li>The Intern will receive direct and close supervision by an appropriate supervisor.</li>
	<li>The Company does not derive an immediate advantage from the activities performed by the Intern.</li>
	<li>Intern is not entitled to wages or any compensation or benefits for the time spent in the internship.</li>
	<li>Company is not liable for injury sustained or health conditions that may arise for the unpaid intern during the course of the internship.</li>
	</ul>
	<br>
	The Intern specifically agrees to and acknowledges the following:
	<br><br>
	<ul>
	<li>This internship is educational in nature and there is no guarantee or expectation that the internship will result in employment.</li>
	<li>Company may at any time in its sole discretion, terminate the internship without notice or cause.</li>
	<li>Intern will maintain a regular internship schedule determined by the Intern and their supervisor.</li>
	<li>Intern will demonstrate honesty, punctuality, courtesy, cooperative attitude, proper health and grooming habits, appropriate dress and a willingness to learn.</li>
	<li>Intern will obey the policies, rules and regulations of the Company site and comply with the Company’s business practices and procedures.</li>
	<li>Intern will furnish his/her supervisor with all necessary information pertaining to my unpaid internship, including related assignments and reports.</li>
	<li>Under no circumstances will Intern leave the internship without first conferring with Intern’s supervisor.</li>
	<li>Transportation to and from the internship site is the responsibility of the Intern.</li>
	<li>While Intern is on the Company premises or working remotely, he/she is considered an employee or agent of Company for any purposes, including but not limited to workers compensation.</li>
	<li>Intern assumes all of the risks of participating in the internship program.</li>
</ul>
<br>
 In consideration of the opportunity afforded to the Intern to participate in the internship program, Intern hereby agrees that he/she, his/her assignees, heirs, guardians, and legal representatives, will not make a claim against Company or any of its affiliated organizations, or either of their officers or directors collectively or individually, or any of its employees, for the injury of death to Intern or damage to his/her property, however caused, arising from his/her participation in the internship program. Without limiting the generality of the foregoing. Intern hereby waives and releases any rights, actions, or causes or action resulting from personal injury or death to him/her, or damage to his/her property, sustained in connection with his/her participation in the internship program.
<br><br>
<strong>I understand that this unpaid, learning experience is not employment and that Intern is not entitled to wages or a promise of employment at the completion of the unpaid structured learning experience.<br><br>
I also understand that I am bound by a Nondisclosure Agreement: The Intern agrees (i) not to disclose any Confidential Information or any information derived therefrom to any third person, (ii) to keep the Company’s Confidential Information confidential and take all the reasonable precautions to protect the confidentiality of such Confidential Information with the same degree of care with which it protects the confidentiality of its own confidential information, but in no event with less than a reasonable degree of care, and (iii) not to use any Confidential Information for any purpose whatsoever except to advance the legitimate business interests of the Company under written or oral instruction of the Company’s authorized officers. 
</strong>
<br><br>
<div class="text-center">
<? if($internagreement == '0') { ?>

<form action="intern-agreement.php" method="post">
<input type="hidden" name="internstartdate" value="<?=date('m/d/Y')?>">
<input type="submit" class="btn btn-success" name="iagree" value="I Agree to the Terms in This Contract"><br>
</p>
</form><br><br>
Go to <a href="myaccount.php">My Account</a>

<? } else { ?>

  <div style="background-color:yellow;">You agreed to this contact on <?=$internstartdate?>. Go to <a href="myaccount.php">My Account</a></div>

<? } ?>
</div>



                                    </p>
                                    
                                </div><!--//section-block-->
                                
                                 
                             
                            </section><!--//doc-section-->
                            
                            
                           
                                
                                
                               
                               
                            
                            
                               
                            
                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    
                    
                    
                    
                    
                    
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
     <div id="promo-block" class="promo-block promo-block-2">
<div class="container">
<div class="promo-block-inner">

<h3 class="promo-title text-center"><i class="fa fa-heart"></i> <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Jax Code Academy - Web Dev Bootcamp Starts Septemer 10</a></h3>   

<div class="row">

<div class="figure-holder col-md-5 col-sm-6 col-xs-12">
<div class="figure-holder-inner">
<a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/bootcampromo.jpg" alt="Jax Code Promo" /></a>                                <a class="mask" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="icon fa fa-heart pink"></i></a>
</div>
</div><!--//figure-holder-->

<div class="content-holder col-md-7 col-sm-6 col-xs-12">

<div class="content-holder-inner">
<div class="desc">

<h4 class="content-title"><strong>Dont' wait, sign up now! Deferred Tuituion</strong></h4> 

<p>You will learn HTML, CSS, Javascript, AngularJS, JQuery, Bootstrap, PHP, Photoshop Basics, and MySQL database. By the end of the course you will have the skills to qualify and be employed as a Web Developer. </p>

<p><strong class="highlight">Real World Projects</strong> You will be working on real projects for real businesses during this 8-week course. We also have internships where you can stay past graduation to work on projects to add to your resume.</p>

<a class="btn btn-cta" href="http://jaxcodeacademy.com/web_dev_prep_full.php" target="_blank">Register</a>

</div><!--//desc-->

  
                         </div><!--//content-holder-inner-->                        </div><!--//content-holder-->

</div><!--//row-->
</div><!--//promo-block-inner-->
</div><!--//container-->
</div><!--//promo-block-->   
        
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
    
</body>
</html> 

