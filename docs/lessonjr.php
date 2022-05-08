<?php
session_start();
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
$_SESSION['lessonslug'] = $_GET['lessonslug'];

switch ($_SESSION['lessonslug']) {
    case "helloworld":
        $lessontitle = 'Hello World';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "html":
        $lessontitle = 'HTML';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "cron":
        $lessontitle = 'Cron';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "jaxcode":
        $lessontitle = 'Jaxcode';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "webhosting":
        $lessontitle = 'Web Hosting';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "webserver":
        $lessontitle = 'SFTP, Telnet, Command Line, Linux';
        $sections = array("SFTP", "Telnet", "Command Line", "Linux", "Assignments");
        break;
    case "bootstrap":
        $lessontitle = 'Bootstrap';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "codingenvironment":
        $lessontitle = 'Coding Environment';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "graphicseditor":
        $lessontitle = 'Using a Graphics Editor';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "favicon":
        $lessontitle = 'Favicons';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "sides":
        $lessontitle = 'Client side vs. Server side';
        $sections = array("Client vs. Server Side", "Assignments");
        break;
    case "mysql":
        $lessontitle = 'MySQL database and SQL';
        $sections = array("MySQL", "SQL", "Assignments");
        break;
    case "html":
        $lessontitle = 'HTML';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "github":
        $lessontitle = 'Github';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "css":
        $lessontitle = 'CSS';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "webforms":
        $lessontitle = 'Web Forms';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpglobals":
        $lessontitle = 'PHP Global Variables';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpvalidation":
        $lessontitle = 'PHP Form Validation';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpbasics":
        $lessontitle = 'PHP Basics';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpmysql":
        $lessontitle = 'PHP and MySQL';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpmailfunction":
        $lessontitle = 'PHP Mail Function';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpfunctions":
        $lessontitle = 'PHP Functions';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "phpsessions":
        $lessontitle = 'PHP Sessions';
        $sections = array("$lessontitle", "Assignments");
        break;
    case "jsjquery":
        $lessontitle = 'Javascript & JQuery';
        $sections = array("Javascript", "JQuery", "Assignments");
        break;
    case "dns":
        $lessontitle = 'Domain Names and SSL';
        $sections = array("Domain Names", "SSL", "Assignments");
        break;
    case "wordpress":
        $lessontitle = 'Wordpress';
        $sections = array("$lessontitle", "Assignments");
        break;
    default:
        header('Location: web_dev_jr.php');
}

?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  <!--[if !IE]><!-->
<html lang="en"> 
<!--<![endif]-->

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
<link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">
<link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
<!-- Theme CSS -->
<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
</head> 

<body class="body-blue">

<div class="page-wrapper">

<!-- ******Header****** -->
<header id="header" class="header">

<div class="container">

<div class="branding">
<h1 class="logo">
<a href="index.html">
<span aria-hidden="true" class="icon_documents_alt icon"></span>                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>                        </a>
</h1>
</div><!--//branding-->

<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="web_dev_jr.php">Junior Web Dev</a></li>
<li class="active">Lesson: <?=$lessontitle?></li>
</ol>

</div><!--//container-->
</header><!--//header-->

<div class="doc-wrapper">
<div class="container">

<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="icon fa fa-sitemap"></i> Lesson: <?=$lessontitle?></h1>

<div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->

<div class="doc-body">
<div class="doc-content">
<div class="content-inner">

<? include 'lessonsjr/'.$_SESSION['lessonslug'].'.php'; ?>
                     
                     
</div><!--//content-inner-->
</div><!--//doc-content-->                    


<div class="doc-sidebar">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
<?

//$newfile = $_SESSION['lessonslug'].'.php';
//$myfile = fopen("lessons/$newfile", "w") or die("Unable to open file!");

foreach($sections as $section) {
/*
// HERE

$txt = '<section id="'.strtolower($string = str_replace(' ', '', $section)).'" class="doc-section">
<h2 class="section-title">'.$section.'</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
</div>
</div>
</section><!--//doc-section-->


';
fwrite($myfile, $txt);
*/
// TO HERE

echo '<li><a class="scrollto" href="lesson.php#'.strtolower($string = str_replace(' ', '', $section)).'">'.$section.'</a></li>';    
}
//fclose($myfile);
?>

</ul><!--//doc-menu-->
</nav>
</div><!--//doc-sidebar-->

</div><!--//doc-body-->
</div><!--//container-->
</div><!--//doc-wrapper-->             


<? include 'promoblock-1.php'; ?>


</div><!--//container-->
</div><!--//promo-block-->
</div><!--//page-wrapper-->


<footer id="footer" class="footer text-center">
<div class="container">

<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->

<small class="copyright">Copyright &copy; <a href="http://jaxcodeacademy.com/">Jax Code Academy</a></small>
</div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 