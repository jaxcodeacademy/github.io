<?php
session_start();
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
?> <!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  <head>    <title>Jax Code Academy Documentation</title>    <!-- Meta -->    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="">    <meta name="author" content="">        <link rel="shortcut icon" href="../favicon.ico">      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Global CSS -->    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">       <!-- Plugins CSS -->        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">    <link rel="stylesheet" href="assets/plugins/prism/prism.css">    <link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">    <!-- Theme CSS -->    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->    </head> 

<body class="body-blue">
<div class="page-wrapper">

<!-- ******Header****** -->
<header id="header" class="header">
<div class="container">
<div class="branding">
<h1 class="logo">
<a href="index.html">
<span aria-hidden="true" class="icon_documents_alt icon"></span>                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>                        </a></h1>
</div><!--//branding-->   

<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li class="active"><a href="web_dev.php">Web Dev Bootcamp</a></li>
</ol>
</div><!--//container-->
</header><!--//header-->

<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Web Developer Bootcamp</h1>                    

<div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->
<div class="doc-body">                    <div class="doc-content">                        <div class="content-inner">                            <section id="syllabus" class="doc-section">                                <h2 class="section-title">Day <?=$_GET['j']?></h2>                                <div class="section-block">                                    



<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<?
switch ($_GET['j']) {

case "20":
echo "8/19/2019";
echo '<h3>Registration & Login Project (INSERT & SELECT)</h3>
<ol>
	<li>Build a registration & login system.</li>
</ol><br><br>
';
break;

case "19":
echo "8/19/2019";
echo '<h3>PHP Forms & INSERT</h3>
<ol>
	<li>PHP Forms</li>
	<li>POST Variables</li>
	<li>INSERT statement<ol type="a">
	<li>a. Assignment 19.1 - Add INSERT to "My Guests"</li></ol></li>
</ol><br><br>
';
break;

case "18":
echo "8/19/2019";
echo '<h3> PHP, Databases, SELECT</h3>
<ol>
	<li>Credentials</li>
	<li>Connecting to Database</li>
	<li>SELECT statement</li>
	<li>WHILE loop. (pulling records into a table)</li>
	<li>ROW Variable<ol type="a">
	<li>Assignment 18.1 - Use SELECT on “My Guests” table.</li></ol></li>

</ol><br><br>
';
break;

case "17":
echo "8/19/2019";
echo '<h3>Databases</h3>
<ol>
	<li>Creating a Database</li>
	<li>Creating a Table</li>
	<li>Fields & Field Properties</li>
	<li>How to truncate a table</li>
	<li>How to drop a Table</li>
	<li>How to rename a Table<ol type="a">
	<li>Assignment 17.1 - Create “My Guests” table.</li></ol></li>
</ol><br><br>
';
break;

case "16":
echo "8/19/2019";
echo '<h3>Webfaction, FTP Programs, PHP Basics</h3>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/Intro-to-PHP.pdf" target="_blank">Intro to PHP</a> </li>
	<li>Introduction to Webfaction/Servers</li>
	<li>Introduction to FTP Programs</li>
	<li>Select and Manipulate</li>
	<li>Variables</li>
	<li>If/Else</li>
	<li>Functions</li>
	<li>Arrays</li>
	<li>While Loops</li>
	<li>For Each Loops<ol type="a">
	<li>Assignment 16.1 - Problem Set</li></ol></li>
</ol><br><br>
';
break;



/////

case "15":
echo "8/19/2019";
echo '<h3>Todo List Project</h3>
<ol>
	<li>Build Todo list project using HTML, CSS, and jQuery.</li>
</ol><br><br>
';
break;

case "14":
echo "8/19/2019";
echo '<h3>Advanced jQuery</h3>
<ol>
	<li>jQuery Events: Click</li>
	<li>jQuery Events: Keypress</li>
	<li>jQuery Events: On</li>
	<li>jQuery Effects</li>
</ol><br><br>
';
break;

case "13":
echo "8/19/2019";
echo '<h3>Intro to jQuery</h3>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/13-Intro-to-jQuery.pdf" target="_blank">Intro to jQuery</a> </li>
	<li>What is jQuery?</li>
	<li>Why use jQuery?</li>
	<li>Including jQuery</li>
	<li>Selecting with jQuery<ol type="a">
	<li>Assignment 13.1 - Selector Exercise</li></ol></li>
	<li>Text and HTML</li>
	<li>Attr and Val</li>
	<li>Manipulating Classes</li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/354947550" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;

case "12":
echo "8/19/2019";
echo '<h3>Advanced DOM Manipulation</h3>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/12-Advanced-DOM-Manipulation.pdf" target="_blank">Advanced DOM Manipulation</a> </li>
	<li>Introduction to Events<ol type="a">
	<li>Assignment 12.1 - Color Toggle Exercise</li>
	<li>Assignment 12.2 - Score Keeper Exercise</li></ol></li>
	<li>Other types of Events<ol type="a">
	<li>Assignment 12.3 - Counting Events Exercise</li></ol></li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/354721512" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;


case "11":
echo "8/19/2019";
echo '<h3>DOM Manipulation</h3>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/11-DOM-Manipulation.pdf" target="_blank">DOM Manipulation</a> </li>
	<li>Introduction to the DOM</li>
	<li>Defining the DOM</li>
	<li>Select and Manipulate Important Selector Methods<ol type="a">
	<li>Assignment 11.1 - Selector Exercise</li></ol></li>
	<li>Manipulating Style</li>
	<li>Manipulating Text and Content</li>
	<li>Manipulating Attributes</li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/354539365" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;

case "10":
echo "8/16/2019";
echo '<br><br>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/9-JavaScript _ Arrays.pdf" target="_blank">Javascript Arrays</a> </li>
	<li>Introduction to Objects</li>
	<li>Comparing Objects and Arrays</li>
	<li>Nested Objects and Arrays<ol type="a">
	<li>Assignment 10.1 - Objects Quiz</li>
	<li>Assignment 10.2 - Movie Database Exercise</li></ol></li>
	<li>Adding Methods Objects</li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/354115773" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

';
break;

case "9":
echo "8/15/2019";
echo '<br><br>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/9-JavaScript _ Arrays.pdf" target="_blank">Javascript Arrays</a> </li>
	<li>Introduction to Functions</li>
	<li>Introduction to Arrays</li>
	<li>Array Methods<ol type="a">
	<li>Assignment 9.1 - Array Quiz</li>
	<li>Assignment 9.2 - To Do List Part 1</li></ol></li>
	<li>Array Iteration<ol type="a">
	<li>Assignment 9.3 - Array Iteration Challenge</li>
	<li>Assignment 9.4 - To Do List Part 2</li>
	<li>Assignment 9.5 - Array Problem Set</li></ol></li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/353841095" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

';
break;

case "8":
echo "8/14/2019";
echo '<br><br>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/8-JavaScript _ Functions.pdf" target="_blank">Javascript Functions</a> </li>
	<li>Introduction to Functions</li>
	<li>Arguments</li>
	<li>The Return Keyword<ol type="a">
	<li>Assignment 8.1 - Functions Quiz</li>
	<li>Assignment 8.2 - Functions Problem Set</li></ol></li>
	<li>Scope<ol type="a">
	<li>Assignment 8.3 - Scope Quiz</li></ol></li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/353638245" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;

case "7":
echo "8/13/2019";
echo '<br><br>
<ol>
	<li><span class="label label-primary">PDF</span> <a href="day/7-Javascript -Control-Flow.pdf" target="_blank">Javascript Control Flow</a> </li>
	<li>Boolean Logic</li>
	<li>Logical Operators</li>
	<li>Conditionals<ol type="a">
	<li>Assignment 7.1 - Conditionals Exercise</li>
	<li>Assignment 7.2 - Guessing Game</li></ol></li>
	<li>Introduction to Loops</li>
	<li>While Loop Exercises</li>
	<li>While Loops Problem Set<ol type="a">
	<li>Assignment 7.3 - Annoying Game</li></ol></li>
	<li>Intro to For Loops<ol type="a">
	<li>Assignment 7.4 - For Loops Problem Set</li></ol></li>
</ol><br><br>
<iframe src="https://player.vimeo.com/video/353446902" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;



case "1":
echo "8/5/2019";
echo '<br><br>


<ul>   <li> <span class="label label-primary">PDF</span> <a href="day/1-Welcome.pdf" target="_blank">Welcome Slides</a>   </li>

<li>Discord</li>
<li><span class="label label-primary">PDF</span> <a href="day/1-HTML.pdf" target="_blank">HTML Slides</a> </li><li> Intro HTML (headings, paragraphs, lists, images, links, breaks, horizontal rule, attributes)
<ul><li> Assignment 1.1: Recreate basic HTML website</li></ul></li>
<li>HTML Tables (table tag, heading, row, data, border)
<ul><li> Assignment 1.2: Harry Potter Table Exercise</li></ul></li>
<li>HTML Forms (form tag & attributes, inputs, button)
<ul><li> Assignment 1.3: Forms exercise</li></li></ul></li>
</ul><br><br>
<iframe src="https://player.vimeo.com/video/340320810" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<p><a href="https://vimeo.com/340320810">HTML Basics</a> from <a href="https://vimeo.com/user99332130">Jax Code Academy</a> on <a href="https://vimeo.com">Vimeo</a>.</p>';
break;

case "2":
echo "8/6/2019";
echo '<br><br>


<ul>

<li>GitHub
Assignment 2.1: Upload Day 1 assignments to GitHub</li>
<li><span class="label label-primary">PDF</span> <a href="day/2-CSS.pdf" target="_blank">CSS Slides</a> </li>
<li>In-line, Internal, & External styling</li>
<li>Syntax</li>
<li>CSS Selectors (class, id, tag)</li>
<li>Intro to CSS (color, background-color, image background, font-size, border, border</li>
<li>radius, margin, padding, alignment)</li>
<li>Intro to DevTools
<ul><li>Assignment 2.2: Recreate HTML & CSS website</li></ul></li>
</ul>

<br>HOMEWORK: Finish Assignments, CSS Exercises (Syntax, Background, Border,
Margin, Padding, Text, Font, Align, Rounded Corners, Colors), Upload Assignments to GitHub

';
break;

case "3":
echo "8/7/2019";
echo '<br><br>


<ul>
<li><span class="label label-primary">PDF</span> <a href="day/3-Bootstrap.pdf" target="_blank">Bootstrap</a> </li>
<li>Talk about Responsive Design (Desktop, Laptop, Tablet, Mobile)</li>
<li>Responsive Frameworks (Bootstrap, Materialize, & Foundation)</li>
<li>Intro to Bootstrap Grid (Container, Row, Columns)
<ul><li>Assignment 3.1: Recreate Bootstrap Grid</li></ul></li>
<li>Bootstrap 4 (Tables, Typography, Images, Colors, Buttons, Navbar, Forms, Inputs,</li>
<li>Flexbox)</li>
<li>Introduce Apple Project
<ul><li>Assignment 3.2: Recreate</li></ul></li>
<li><a href="https://www.apple.com/shop/buy-mac/macbook-pro/13-inch">https://www.apple.com/shop/buy-mac/macbook-pro/13-inch</a></li>
<li>HOMEWORK: Work on Assignments, Upload Assignments to GitHub</li>
</ul>


<br><br>HOMEWORK: Finish Assignments, CSS Exercises (Syntax, Background, Border,
Margin, Padding, Text, Font, Align, Rounded Corners, Colors), Upload Assignments to GitHub
<br><br>
<iframe src="https://player.vimeo.com/video/341207252" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<p><a href="https://vimeo.com/341207252">Bootstrap</a> from <a href="https://vimeo.com/user99332130">Jax Code Academy</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
';
break;

case "4":
echo "8/8/2019";
echo '<br><br>

<ul>
<li>Finish Apple Project</li>
<li>Introduce Bistros<ul>
<li>○ Assignment 4.1: Bistros Wireframe</li>
<li>○ Assignment 4.2: Style Bistros</li>
</ul></li>
<li>HOMEWORK: WORK ON BISTROS, Upload to GitHub</li>
</ul>
<br><small>(click image to enlarge in new tab)</small><br><a href="lessons/images/bistroswireframe.jpg" target="_blank"><img src="lessons/images/bistroswireframe.jpg" style="width:50%;"></a>
';
break;


case "5":
echo "8/9/2019";
echo '<br><br>
<ul>
<li>Work on Bistros<ul>
<li>Assignment 5.1: Finish Bistros</li></ul></li>
<li>HOMEWORK: Finish Bistros, upload to GitHub</li>
</ul>
';
break;

case "6":
echo "8/12/2019";
echo '<br><br>
	<ol>
	<li> <span class="label label-primary">PDF</span> <a href="day/6-Intro-to-JavaScript.pdf" target="_blank">Intro to Javascript</a>   </li>
	<li>Javascript Console</li>
	<li>Primitives<ol type="a">
	<li>Assignment 6.1 - Primitives Exercises</li></ol></li>
	<li>Variables</li>
	<li>Null and Undefined</li>
	<li>Useful Built-in Methods</li>
	<li>Writing Javascript in a Separate FIle<ol type="a">
	<li>Assignment 6.1 - JS Stalker Exercise</li>
	<li>Assignment 6.2 - Age Calculator Exercise</li></ol></li>
	</ol>
	<br><br><iframe src="https://player.vimeo.com/video/353144676" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
';
break;





default:
echo "Error: content missing.";
}
?>




</div>
</div>

</section><!--//doc-section-->     




















</div><!--//content-inner-->
</div><!--//doc-content-->                    


<div class="doc-sidebar">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">                                <li><a href="web_dev.php">Syllabus</a></li>                                      </ul><!--//doc-menu-->
</nav>
</div><!--//doc-sidebar-->

</div><!--//doc-body-->
</div><!--//container-->
</div><!--//doc-wrapper-->             



<? include 'footerad.php'; ?>


<footer id="footer" class="footer text-center">
<div class="container">

<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->

<small class="copyright">Copyright &copy; <a href="https://jaxcodeacademy.com/">Jax Code Academy</a></small>
</div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 