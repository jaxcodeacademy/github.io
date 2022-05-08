<?php
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
?> <!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  <head>    <title>Jax Code Academy Documentation</title>    <!-- Meta -->    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="">    <meta name="author" content="">        <link rel="shortcut icon" href="../favicon.ico">      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Global CSS -->    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">       <!-- Plugins CSS -->        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">    <link rel="stylesheet" href="assets/plugins/prism/prism.css">    <link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">    <!-- Theme CSS -->    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->    </head> 

<body class="body-purple">    <div class="page-wrapper">        <!-- ******Header****** -->        <header id="header" class="header">            <div class="container">                <div class="branding">                    <h1 class="logo">                        <a href="index.html">                            <span aria-hidden="true" class="icon_documents_alt icon"></span>                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>                        </a>                    </h1>                </div><!--//branding-->                              <ol class="breadcrumb">                    <li><a href="index.php">Home</a></li>                    <li class="active">Senior Web Dev Bootcamp</li>                </ol>            </div><!--//container-->        </header><!--//header-->        <div class="doc-wrapper">            <div class="container">                <div id="doc-header" class="doc-header text-center">                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Senior Web Developer Bootcamp</h1>                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->                <div class="doc-body">                    <div class="doc-content">                        <div class="content-inner">                            <section id="syllabus" class="doc-section">                                <h2 class="section-title">Syllabus</h2>                                <div class="section-block">                                    



<div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h6>Topics</h6>
	<ul class="list list-unstyled">
	
	<li><a href="lessonsr.php?lessonslug=binary"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">ASCII vs Unicode</span></a></li>
	<li><a href="lessonsr.php?lessonslug=xml"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">XML</span></a></li>
	<li><a href="lessonsr.php?lessonslug=jsajaxxml"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">XMLHttpRequest</span></a></li>
	<li><a href="lessonsr.php?lessonslug=ajax"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">AJAX GET and POST</span></a></li>
	<li><a href="lessonsr.php?lessonslug=htaccess"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">.htaccess</span></a></li>
	<li><a href="lessonsr.php?lessonslug=https"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">HTTPS</span></a></li>
	<li><a href="lessonsr.php?lessonslug=json"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">JSON</span></a></li>
	<li><a href="lessonsr.php?lessonslug=javascript"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">Javascript</span></a></li>
	<li><a href="lessonsr.php?lessonslug=jquery"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">JQuery</span></a></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript Events</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript <i>this</i> Keyword</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript Forms</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript Form API</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript Objects</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript Functions</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Javascript HTML DOM</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Search Engine Optimization</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Google Analytics</span> <!--https://www.bigcommerce.com/blog/how-to-drive-traffic-convert-customers/#how-to-drive-traffic-to-your-online-store--></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">OOP with PHP</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Google Maps/Fonts/Charts</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Apache Web Server Configuration</span></li>

	<li><i class="fa fa-check"></i> <span style="color:#000000;">AngularJS</span></li>

	<li><i class="fa fa-check"></i> <span style="color:#000000;">Python</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Intro to Java</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Node.js</span></li>
	<li><i class="fa fa-check"></i> <span style="color:#000000;">Model, View, Controller (MVC)</span></li>
	
	
	</ul>
	
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