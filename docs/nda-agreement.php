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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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
                    <li class="active">Non-disclosure Agreement</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_creditcard"></span> Non-disclosure Agreement</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            
                            <section id="myaccount-myinfo" class="doc-section">
                                <h2 class="section-title">NDA</h2>
                                
                                
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

$sql = "UPDATE preregistrations SET nda='1',ndaeffectivedate = '{$_POST['ndaeffectivedate']}' WHERE prereg_id = '{$_COOKIE['jaxcodeid']}'";

if (mysqli_query($conn, $sql)) {

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>You have activated the Jax Code Academy Non-disclosure Agreement!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}



// Get user data
$sql = "SELECT prereg_id,fullname, nda, ndaeffectivedate FROM preregistrations where prereg_id = '{$_COOKIE['jaxcodeid']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
        $nda = $row["nda"];
        $ndaeffectivedate = $row["ndaeffectivedate"];
        $prereg_id = $row["prereg_id"];
        $fullname = $row["fullname"];

    } // while
} else {
    echo "0 results";
}
$conn->close();


?>

<? if($nda == '0') { ?>

<div class="lead">Read this contract and submit it to activate your non-disclosure and non-compete with Jax Code Academy.</div>
<? } else { ?>


  <div style="background-color:yellow;" class="text-center">You agreed to this contact on <?=$ndaeffectivedate?>. Go to <a href="myaccount.php">My Account</a></div><br>
 

<? } ?>



<p>
NON-DISCLOSURE & NON-COMPETE AGREEMENT
<br><br>
This Confidential Non-Disclosure & Non-Compete Agreement (“Agreement”) is made between:

 <br><br>

Jax Code Academy<br>
jaxcode.com

 <br><br>

 

<?=$fullname?>
 <br><br>

On the understanding that both parties are interested in meeting to consider possible collaboration developments arising from Disclosing Party’s web site development, including computer programming, graphic design, e-commerce, multimedia programming and design, it is agreed that all information whether oral, written or otherwise, that is supplied to the Receiving Party in the course of any meeting shall be treated as confidential by the Receiving Party.
 
<br><br>
The Receiving Party undertakes not to use the information for any purpose, other than for the purpose of considering collaboration, without obtaining written agreement of the Disclosing Party.
 
<br><br>
This Agreement applies to both technical and commercial information communicated by either Party.
 <br><br>

This Agreement does not apply to any information in the public domain or which the Receiving Party can show was either  already lawfully in their possession prior to its disclosure by the Disclosing Party or acquired without the involvement, either directly or indirectly, or the Disclosing Party.
 
<br><br>
Neither Party to this Agreement shall retain any documents or items connected with the disclosure after collaboration has ceased.
 
<br><br>
No disclosure made by the Receiving Party shall create any license, title or interest in respect of any Intellectual Property Rights of the Disclosing Party.
 <br><br>

Receiving Party agrees not to engage in any employment, consulting, or other activity involving computer programming, graphic design, Internet or web site development, e-commerce, video or film production or editing, multimedia programming, or design that competes with the business, proposed business or business interests of Disclosing Party without Disclosing Party’s prior written consent.
 
<br><br>
Receiving Party shall not solicit any of Disclosing Party’s clients or prospective clients to perform services that compete with the business, proposed business or business interests of Disclosing Party without Disclosing Party’s prior written consent, and Receiving Party will not assist any other person or entity in doing so, without Disclosing Party’s prior written consent.
 <br><br>

After 3 years from the executed date, each Party shall be relieved of all obligations under this Agreement.
<br><br>
</strong>
<br><br>
<div class="text-center">
<? if($nda == '0') { ?>

<form action="nda-agreement.php" method="post">
<input type="hidden" name="ndaeffectivedate" value="<?=date('m/d/Y')?>">
<input type="submit" class="btn btn-success" name="iagree" value="I Agree to the Terms in This Contract"><br>
</p>
</form><br><br>
Go to <a href="myaccount.php">My Account</a>

<? } else { ?>

  <div style="background-color:yellow;">You agreed to this contact on <?=$ndaeffectivedate?>. Go to <a href="myaccount.php">My Account</a></div>

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

