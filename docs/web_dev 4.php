<?php
session_start();
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
?> <!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  <head>    <title>Jax Code Academy Documentation</title>    <!-- Meta -->    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="">    <meta name="author" content="">        <link rel="shortcut icon" href="../favicon.ico">      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Global CSS -->    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">       <!-- Plugins CSS -->        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">    <link rel="stylesheet" href="assets/plugins/prism/prism.css">    <link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">    <!-- Theme CSS -->    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->    </head> 

<body class="body-blue">    <div class="page-wrapper">        <!-- ******Header****** -->        <header id="header" class="header">            <div class="container">                <div class="branding">                    <h1 class="logo">                        <a href="index.html">                            <span aria-hidden="true" class="icon_documents_alt icon"></span>                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>                        </a>                    </h1>                </div><!--//branding-->                              <ol class="breadcrumb">                    <li><a href="index.php">Home</a></li>                    <li class="active">Web Dev Bootcamp</li>                </ol>            </div><!--//container-->        </header><!--//header-->        <div class="doc-wrapper">            <div class="container">                <div id="doc-header" class="doc-header text-center">                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Web Developer Bootcamp</h1>                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->                <div class="doc-body">                    <div class="doc-content">                        <div class="content-inner">                            <section id="syllabus" class="doc-section">                                <h2 class="section-title">Syllabus</h2>                                <div class="section-block">                                    



<div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                        

<? if($_SESSION['syllabus'] == '0') { ?>

                                         <h6>Topics</h6>
	<ul class="list list-unstyled">
	
	<li><a href="lesson.php?lessonslug=jaxcode"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Create a Folder named 'jaxcode'</span></a></li>
	
	<li><a href="https://www.w3schools.com/" target="_blank"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">w3schools.com</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> Hello World</span></a></li>

	<li><a href="#"><i class="fa fa-check"></i></a> Web Hosting</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> SFTP, Telnet, Command Line, Linux</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> Client side vs. Server side</span></a></li>
	
	
	
	<li><a href="#"><i class="fa fa-check"></i></a> MySQL database and SQL</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> Web Forms</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> PHP Global Variables</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> PHP Form Validation</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> PHP Mail Function</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> Favicons</span></a></li>
	
	<li><a href="#"><i class="fa fa-check"></i></a> PHP & MySQL</span></a></li>
		
<li><a href="#"><i class="fa fa-check"></i></a> Crontab and Database Backup</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> CSS</span></a></li>

	
	<li><a href="#"><i class="fa fa-check"></i></a> Bootstrap 3 vs. 4</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> Github</span></a></li>	
	
	<li><a href="#"><i class="fa fa-check"></i></a> Wordpress</span></a></li>


<li><a href="#"><i class="fa fa-check"></i></a> PHP Date Function and Case Statement</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> PHP Files &amp; Heredoc</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> PHP Challenges</span></a> (under construction)</li>

<li><a href="#"><i class="fa fa-check"></i></a>Creating a Registration and Login System</span></a></li>



<li><a href="#"><i class="fa fa-check"></i></a> PHP Sessions</li>

<li><a href="https://datatables.net/"><i class="fa fa-check"></i></a> Datatables</span></li>
	
<!--li><a href="#"><i class="fa fa-check"></i></a>Wordpress</span></a></li-->

<li><a href="#"><i class="fa fa-check"></i></a>Drupal</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a>Chart.js</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> PHP Functions</li>

	

<li><a href="#"><i class="fa fa-check"></i></a>PHP Advanced</span></a></li>


	
<li><a href="#"><i class="fa fa-check"></i></a> Building Templates</li>	

<li><a href="#"><i class="fa fa-check"></i></a> Model, View, Controller (MVC)</li>	

<li><a href="#"><i class="fa fa-check"></i></a> Introduction to Python</li>	

<li><a href="#"><i class="fa fa-check"></i></a>.htaccess and php.ini, </li>	



<li><a href="#"><i class="fa fa-check"></i></a>HIPAA </li>
	
	
	
	
	<li><a href="#"><i class="fa fa-check"></i></a> Javascript &amp; JQuery</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Domain Names and SSL</li>
	<li><a href="#"><i class="fa fa-check"></i></a> eCommerce</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Managing DNS</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Resume and Job Search</li>
	</ul>

<? } else { ?>












       <h6>Webex</h6>                                   
             <li><a href="web_dev_webex.php">Recored Daily Classes</span></a></li>                           
                                        
                                        
                                            <h6>Topics</h6>
	<ul class="list list-unstyled">
	
	<li><a href="lesson.php?lessonslug=jaxcode"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Create a Folder named 'jaxcode'</span></a></li>
	
	<li><a href="https://www.w3schools.com/" target="_blank"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">w3schools.com</span></a></li>
	
	<li><a href="lesson.php?lessonslug=helloworld"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 01: Hello World</span></a></li>

	<li><a href="lesson.php?lessonslug=webhosting"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 02: Web Hosting</span></a></li>
	
	<li><a href="lesson.php?lessonslug=webserver"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 03: SFTP, Telnet, Command Line, Linux</span></a></li>
	
	<li><a href="lesson.php?lessonslug=sides"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 04: Client side vs. Server side</span></a></li>
	
	
	
	<li><a href="lesson.php?lessonslug=mysql"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 05: MySQL database and SQL</span></a></li>
	
	<li><a href="lesson.php?lessonslug=webforms"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 06: Web Forms</span></a></li>
	
	<li><a href="lesson.php?lessonslug=phpglobals"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 07: PHP Global Variables</span></a></li>
	
	<li><a href="lesson.php?lessonslug=phpvalidation"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 08: PHP Form Validation</span></a></li>
	
	<li><a href="lesson.php?lessonslug=phpmailfunction"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 09: PHP Mail Function</span></a></li>
	
	<li><a href="lesson.php?lessonslug=favicon"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 10: Favicons</span></a></li>
	
	<li><a href="lesson.php?lessonslug=phpmysql"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 11: PHP & MySQL</span></a></li>
		
<li><a href="lesson.php?lessonslug=cron"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 12: Crontab and Database Backup</span></a></li>

<li><a href="lesson.php?lessonslug=css"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 13: CSS</span></a></li>

	
	<li><a href="lesson.php?lessonslug=bootstrap"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 14: Bootstrap</span></a></li>

	
<li><a href="lesson.php?lessonslug=github"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 15: Github</span></a></li>	

<li><a href="lesson.php?lessonslug=wordpress"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 16: Wordpress</span></a></li>

<li><a href="lesson.php?lessonslug=phpbasics2"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 17: PHP Date Function and Switch Statement</span></a></li>

<li><a href="lesson.php?lessonslug=phpbasics"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 18: PHP Files &amp; Heredoc</span></a></li>

<li><a href="lesson.php?lessonslug=phpsessions"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 19: PHP Sessions</span></a></li>

<li><a href="lesson.php?lessonslug=cookies"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 20: PHP Cookies</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a>Lesson 21: Creating a Registration and Login System</span></a></li>

<li><a href="lesson.php?lessonslug=wordpresstemplates"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Lesson 22: Wordpress Templates</span></a></li>

<li><a href="https://datatables.net/"><i class="fa fa-check"></i></a> Datatables</span></li>
	
<!--li><a href="#"><i class="fa fa-check"></i></a>Wordpress</span></a></li-->

<li><a href="#"><i class="fa fa-check"></i></a>Drupal</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a>Chart.js</span></a></li>

<li><a href="#"><i class="fa fa-check"></i></a> PHP Functions</li>

	

<li><a href="#"><i class="fa fa-check"></i></a>PHP Advanced</span></a></li>


	
<li><a href="#"><i class="fa fa-check"></i></a> Building Templates</li>	

<li><a href="#"><i class="fa fa-check"></i></a> Model, View, Controller (MVC)</li>	

<li><a href="#"><i class="fa fa-check"></i></a> Introduction to Python</li>	

<li><a href="#"><i class="fa fa-check"></i></a>.htaccess and php.ini, </li>	



<li><a href="#"><i class="fa fa-check"></i></a>HIPAA </li>
	
	
	
	
	<li><a href="#"><i class="fa fa-check"></i></a> Javascript &amp; JQuery</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Domain Names and SSL</li>
	<li><a href="#"><i class="fa fa-check"></i></a> eCommerce</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Managing DNS</li>
	<li><a href="#"><i class="fa fa-check"></i></a> Resume and Job Search</li>
	</ul>
	<? } ?>
</div>
</div>

<!--

<p>
 <h2 class="left"><span class="left_h2">HTML5</span> Tutorial</h2>
 
<ul class="list list-unstyled"> 
<li> <a href="https://www.w3schools.com/Html/default.asp">HTML HOME</a></li>
<li><a href="https://www.w3schools.com/Html/html_intro.asp">HTML Introduction</a></li>
<li><a href="https://www.w3schools.com/Html/html_editors.asp">HTML Editors</a></li>
<li><a href="https://www.w3schools.com/Html/html_basic.asp">HTML Basic</a></li>
<li><a href="https://www.w3schools.com/Html/html_elements.asp">HTML Elements</a></li>
<li><a href="https://www.w3schools.com/Html/html_attributes.asp">HTML Attributes</a></li>
<li><a href="https://www.w3schools.com/Html/html_headings.asp">HTML Headings</a></li>
<li><a href="https://www.w3schools.com/Html/html_paragraphs.asp">HTML Paragraphs</a></li>
<li><a href="https://www.w3schools.com/Html/html_styles.asp">HTML Styles</a></li>
<li><a href="https://www.w3schools.com/Html/html_formatting.asp">HTML Formatting</a></li>
<li><a href="https://www.w3schools.com/Html/html_quotation_elements.asp">HTML Quotations</a></li>
<li><a href="https://www.w3schools.com/Html/html_comments.asp">HTML Comments</a></li>
<li><a href="https://www.w3schools.com/Html/html_colors.asp">HTML Colors</a></li>
<li><a href="https://www.w3schools.com/Html/html_css.asp">HTML CSS</a></li>
<li><a href="https://www.w3schools.com/Html/html_links.asp">HTML Links</a></li>
<li><a href="https://www.w3schools.com/Html/html_images.asp">HTML Images</a></li>
<li><a href="https://www.w3schools.com/Html/html_tables.asp">HTML Tables</a></li>
<li><a href="https://www.w3schools.com/Html/html_lists.asp">HTML Lists</a></li>
<li><a href="https://www.w3schools.com/Html/html_blocks.asp">HTML Blocks</a></li>
<li><a href="https://www.w3schools.com/Html/html_classes.asp">HTML Classes</a></li>
<li><a href="https://www.w3schools.com/Html/html_id.asp">HTML Id</a></li>
<li><a href="https://www.w3schools.com/Html/html_iframe.asp">HTML Iframes</a></li>
<li><a href="https://www.w3schools.com/Html/html_scripts.asp">HTML JavaScript</a></li>
<li><a href="https://www.w3schools.com/Html/html_filepaths.asp">HTML File Paths</a></li>
<li><a href="https://www.w3schools.com/Html/html_head.asp">HTML Head</a></li>
<li><a href="https://www.w3schools.com/Html/html_layout.asp">HTML Layout</a></li>
<li><a href="https://www.w3schools.com/Html/html_responsive.asp">HTML Responsive</a></li>
<li><a href="https://www.w3schools.com/Html/html_computercode_elements.asp">HTML Computercode</a></li>
<li><a href="https://www.w3schools.com/Html/html_entities.asp">HTML Entities</a></li>
<li><a href="https://www.w3schools.com/Html/html_symbols.asp">HTML Symbols</a></li>
<li><a href="https://www.w3schools.com/Html/html_charset.asp">HTML Charset</a></li>
<li><a href="https://www.w3schools.com/Html/html_urlencode.asp">HTML URL Encode</a></li>
<li><a href="https://www.w3schools.com/Html/html_xhtml.asp">HTML XHTML</a></li>
<li></li>
<li></li>
<li><h2 class="left"><span class="left_h2">HTML</span> Forms</h2></li>
<li><a href="https://www.w3schools.com/Html/html_forms.asp">HTML Forms</a></li>
<li><a href="https://www.w3schools.com/Html/html_form_elements.asp">HTML Form Elements</a></li>
<li><a href="https://www.w3schools.com/Html/html_form_input_types.asp">HTML Input Types</a></li>
<li><a href="https://www.w3schools.com/Html/html_form_attributes.asp">HTML Input Attributes</a></li>
</ul>
</li>
<li></li>
<li>
</p>
-->
                     </section><!--//doc-section-->     
                     
                     

<section id="assignments" class="doc-section">                                <h2 class="section-title">Assignments</h2>                                <div class="section-block">                                    



<div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            
	<p>Assignments will be posted the first week of bootcamp. <br><br> Make sure you are ready for Bootcamp by completing the checklist located on the <a href="start.php">Getting Started</a> page.</p>
	<? //include 'lessonlist.php'; ?>
</div>
</div>


                     </section><!--//doc-section-->                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                                                                    </div><!--//content-inner-->
                                                                    </div><!--//doc-content-->                    


<div class="doc-sidebar">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">                                <li><a class="scrollto" href="#syllabus">Syllabus</a></li>                                <li><a class="scrollto" href="#assignments">Assignments</a></li>                        </ul><!--//doc-menu-->
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