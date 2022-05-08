<? 
session_start();
$breadcrumb = 'Syllabus';
$bodycolor = "body-blue";
$_SESSION['syllabus'] = '0';
include 'header.php'; 
?>
<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Web Developer & Cyber Bootcamp</h1>                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->
<div class="doc-body">
<div class="doc-content">
<div class="content-inner">
<section id="syllabus" class="doc-section">
<h2 class="section-title">Syllabus</h2>
<div class="section-block"> 


<div class="row">
<div class="col-md-12">
<!-- Tabs -->				 


<div class="bs-example bs-example-tabs" data-example-id=togglable-tabs> 

<ul class="nav nav-tabs" id=myTabs role=tablist> 

<li role=presentation class=active><a href=#home id=home-tab role=tab data-toggle=tab aria-controls=home aria-expanded=true>Home</a></li> 

<li role=presentation><a href=#lamp role=tab id=profile-tab data-toggle=tab aria-controls=profile>LAMP Syllabus</a></li> 
<li role=presentation><a href=#mern role=tab id=profile-tab data-toggle=tab aria-controls=profile>MERN Syllabus</a></li>
<li role=presentation><a href=#cyber role=tab id=profile-tab data-toggle=tab aria-controls=profile>Cyber Syllabus</a></li>

<li role=presentation class=dropdown> <a href=# class=dropdown-toggle id=myTabDrop1 data-toggle=dropdown aria-controls=myTabDrop1-contents>LAMP Weekly <span class=caret></span></a> 
	<ul class=dropdown-menu aria-labelledby=myTabDrop1 id=myTabDrop1-contents> 
	<li><a href=#dropdown1 role=tab id=dropdown1-tab data-toggle=tab aria-controls=dropdown1>Week 1</a></li> 
	<li><a href=#dropdown2 role=tab id=dropdown2-tab data-toggle=tab aria-controls=dropdown2>Week 2</a></li> 
	</ul> 
</li>

</ul> 





 
 <div class=tab-content id=myTabContent> 
 <div class="tab-pane fade in active" role=tabpanel id=home aria-labelledby=home-tab> 
 <br><br>
 <p>Your Student ID: <?=$_SESSION['student_id']?><br>
Bootcamp: Web Development and Cybersecurity
</p>
<p><a href="https://vimeo.com/user99332130/videos" target="_blank" class="btn btn-info" style="color:#ffffff;">Video Lessons at Vimeo</a><br><br></p> 

<p>
<a href="https://awwapp.com/" target="_blank" class="btn btn-success" style="color:#ffffff;">Online Whiteboard</a>
</p>

<strong style="color:#000000;">Schedule</strong><br><br>

<!-- Well -->
<div class="well"><h3>LAMP STACK</h3>

Monday through Thursday, 10am to 12pm<br>
<br>Lead Instructor: Dennis Swiggett (dennis@jaxcode.com)
<br><br>
</div>
<!-- /Well -->

<!-- Well -->
<div class="well"><h3>MERN STACK</h3>

Monday through Thursday, 12pm to 2pm<br>
<br>Lead Instructor: Blake Seipler (blake@jaxcode.com)
<br><br>
</div>
<!-- /Well -->

<!-- Well -->
<div class="well"><h3>CYBER</h3>

Monday through Thursday, 2pm to 4pm<br>
<br>Lead Instructor: Dr. Fitzmeyer (drf@jaxcode.com)
<br><br>
</div>
<!-- /Well -->





			
						 
	
</div> 




<!-- LAMP CONTENT -->
 <div class="tab-pane fade" role=tabpanel id=lamp aria-labelledby=profile-tab> <br><br> <p>
 <?
	include 'lessonlistwebdev.php';
 ?>
 </p> 
 </div> 
<!-- /LAMP CONTENT -->
 
<!-- MERN CONTENT --> 
  <div class="tab-pane fade" role=tabpanel id=mern aria-labelledby=profile-tab>  <br><br><p>
 Coming Soon
 </p> 
 </div> 
 <!-- /MERN CONTENT -->
 
 
 <!-- CYBER CONTENT -->
  <div class="tab-pane fade" role=tabpanel id=cyber aria-labelledby=profile-tab> <br><br> <p>
 <?
	include 'lessonlistcyber.php';
 ?>
 </p> 
 </div> 
 <!-- /CYBER CONTENT -->
 
 
 
 
 
 <div class="tab-pane fade" role=tabpanel id=dropdown1 aria-labelledby=dropdown1-tab>  <br><br>LAMP Curriculum
Week 1:
February 8th - Day 1: HTML Basics & Setup

<ul>
<li>
Setup Editor:
<ul>
<li>Visual Studio Code: <a target="_blank" href="https://visualstudio.microsoft.com/">Visual Studio Code</a></li>
<li>BBEdit: <a target="_blank" href="https://www.barebones.com/products/bbedit/">BBEdit</a></li>
<li>Atom: <a target="_blank" href="https://atom.io/">Atom</a></li>
</ul>
</li>

<li>
Start HTML Basics:
<ul>
<li>Basic Skeleton: <a target="_blank" href="https://www.w3schools.com/w3css/w3css_web_html.asp">W3Schools</a></li>
<li>Headings: <a target="_blank" href="https://www.w3schools.com/html/html_headings.asp">W3Schools</a></li>
<li>Paragraphs: <a target="_blank" href="https://www.w3schools.com/html/html_paragraphs.asp">W3Schools</a></li>
<li>Spans: <a target="_blank" href="https://www.w3schools.com/tags/tag_span.asp">W3Schools</a></li>
<li>Attributes: <a target="_blank" href="https://www.w3schools.com/html/html_attributes.asp">W3Schools</a></li>
<li>Images: <a target="_blank" href="https://www.w3schools.com/html/html_images.asp">W3Schools</a></li>
<li>Links: <a target="_blank" href="https://www.w3schools.com/html/html_links.asp">W3Schools</a></li>
<li>Comments: <a target="_blank" href="https://www.w3schools.com/html/html_comments.asp">W3Schools</a></li>
<li>Lists: <a target="_blank" href="https://www.w3schools.com/html/html_lists.asp">W3Schools</a></li>
<li>Block & Inline: <a target="_blank" href="https://www.w3schools.com/html/html_blocks.asp">W3Schools</a></li>
<li>iFrame: <a target="_blank" href="https://www.w3schools.com/html/html_iframe.asp">W3Schools</a></li>
<li>Formatting: <a target="_blank" href="https://www.w3schools.com/html/html_formatting.asp">W3Schools</a></li>
<li>Quotations: <a target="_blank" href="https://www.w3schools.com/html/html_quotation_elements.asp">W3Schools</a></li>
</ul>
</li>
</ul>





<strong>Assignment: Create a 3-Page Website about anything that you want. Make sure the three pages link together. Use the HTML that we covered.</strong>
<br><br>
February 9th - Day 2: HTML Continued
<ul>
<li>
Forms
<ul>
<li>Form Elements: <a target="_blank" href="https://www.w3schools.com/html/html_form_elements.asp">W3Schools</a></li>
<li>Form Attributes: <a target="_blank" href="https://www.w3schools.com/html/html_forms_attributes.asp">W3Schools</a></li>
<li>Input types: <a target="_blank" href="https://www.w3schools.com/html/html_form_input_types.asp">W3Schools</a></li>
<li>Input Attributes: <a target="_blank" href="https://www.w3schools.com/html/html_form_attributes.asp">W3Schools</a></li>
</ul>
</li>

<li>
Semantics: <a target="_blank" href="https://www.w3schools.com/html/html5_semantic_elements.asp
<ul>
<li>Header</li>
<li>Nav</li>
<li>Section</li>
<li>Article</li>
<li>Aside</li>
<li>Footer</li>
<li>Details</li>
<li>Summary</li>
<li>Div</li>
</ul>
</li>

<li>
Tables: <a target="_blank" href="https://www.w3schools.com/html/html_tables.asp
<ul>
<li>Table, Tr, Th, Td</li>
</ul>
</li>

<li>
Favicon
<ul>
<li>Favicon Generator: <a target="_blank" href="https://favicon.io/</li>
</ul>
</li>
</ul>





<strong>Assignment: Add a form, table, & favicon to your 3-page website.</strong>





February 10th - Day 3: CSS
<ul>
<li>
Inserting CSS: <a target="_blank" href="https://www.w3schools.com/css/css_howto.asp
<ul>
<li>External</li>
<li>Internal</li>
<li>Inline</li>
</ul>
</li>

	<li>Classes: <a target="_blank" href="https://www.w3schools.com/html/html_classes.asp">W3Schools</a></li>
	<li>Id: <a target="_blank" href="https://www.w3schools.com/html/html_id.asp">W3Schools</a></li>
	<li>Colors: <a target="_blank" href="https://www.w3schools.com/css/css_colors.asp">W3Schools</a></li>
<li>
Backgrounds
<ul>
<li>Background Color: <a target="_blank" href="https://www.w3schools.com/css/css_background.asp">W3Schools</a></li>
<li>Background Image: <a target="_blank" href="https://www.w3schools.com/css/css_background_image.asp">W3Schools</a></li>
<li>Background Repeat: <a target="_blank" href="https://www.w3schools.com/css/css_background_repeat.asp">W3Schools</a></li>
</ul>
</li>

	<li>Gradients: <a target="_blank" href="https://www.w3schools.com/css/css3_gradients.asp">W3Schools</a></li>
	<li>Comments: <a target="_blank" href="https://www.w3schools.com/css/css_comments.asp">W3Schools</a></li>
<li>
Borders: <a target="_blank" href="https://www.w3schools.com/css/css_border.asp
<ul>
<li>Border Width: <a target="_blank" href="https://www.w3schools.com/css/css_border_width.asp">W3Schools</a></li>
<li>Border Color: <a target="_blank" href="https://www.w3schools.com/css/css_border_color.asp">W3Schools</a></li>
<li>Border Sides: <a target="_blank" href="https://www.w3schools.com/css/css_border_sides.asp">W3Schools</a></li>
<li>Border Shorthands: <a target="_blank" href="https://www.w3schools.com/css/css_border_shorthand.asp">W3Schools</a></li>
<li>Rounded Borders: <a target="_blank" href="https://www.w3schools.com/css/css_border_rounded.asp">W3Schools</a></li>
</ul>
</li>

<li>
Margins: <a target="_blank" href="https://www.w3schools.com/css/css_margin.asp
<ul>
<li>Margin Collapse (Margin Shorthands): <a target="_blank" href="https://www.w3schools.com/css/css_margin_collapse.asp">W3Schools</a></li>
</ul>
</li>

	<li>Padding: <a target="_blank" href="https://www.w3schools.com/css/css_padding.asp">W3Schools</a></li>
	<li>Height/Width: <a target="_blank" href="https://www.w3schools.com/css/css_dimension.aspMax Width: <a target="_blank" href="https://www.w3schools.com/css/css_max-width.asp">W3Schools</a></li>
	<li>Outline: <a target="_blank" href="https://www.w3schools.com/css/css_outline.asp">W3Schools</a></li>
<li>
Text
<ul>
<li>Text color: <a target="_blank" href="https://www.w3schools.com/css/css_text.asp">W3Schools</a></li>
<li>Text Alignment: <a target="_blank" href="https://www.w3schools.com/css/css_text_align.asp">W3Schools</a></li>
<li>Text Decoration: <a target="_blank" href="https://www.w3schools.com/css/css_text_decoration.asp">W3Schools</a></li>
<li>Text Transformation: <a target="_blank" href="https://www.w3schools.com/css/css_text_transformation.asp">W3Schools</a></li>
<li>Text Spacing: <a target="_blank" href="https://www.w3schools.com/css/css_text_spacing.asp">W3Schools</a></li>
<li>Text Shadow: <a target="_blank" href="https://www.w3schools.com/css/css_text_shadow.asp">W3Schools</a></li>
</ul>
</li>

<li>
Fonts: <a target="_blank" href="https://www.w3schools.com/css/css_font.asp
<ul>
	<li>Google Fonts: <a target="_blank" href="https://fonts.google.com/</li>
</ul>
</li>

<li>Opacity: <a target="_blank" href="https://www.w3schools.com/css/css_image_transparency.asp">W3Schools</a></li>
<li>
Icons
<ul>
	<li>FontAwesome: <a target="_blank" href="https://fontawesome.com/</li>
</ul>
</li>

	<li>Display: <a target="_blank" href="https://www.w3schools.com/css/css_display_visibility.asp">W3Schools</a></li>
	<li>Lists: <a target="_blank" href="https://www.w3schools.com/css/css_list.asp">W3Schools</a></li>
	<li>Buttons: <a target="_blank" href="https://www.w3schools.com/css/css3_buttons.asp">W3Schools</a></li>
	<li>Position: <a target="_blank" href="https://www.w3schools.com/css/css_positioning.asp">W3Schools</a></li>
	<li>Overflow: <a target="_blank" href="https://www.w3schools.com/css/css_overflow.asp">W3Schools</a></li>
	<li>Float: <a target="_blank" href="https://www.w3schools.com/css/css_float.asp">W3Schools</a></li>
	<li>Inline-block: <a target="_blank" href="https://www.w3schools.com/css/css_inline-block.asp">W3Schools</a></li>
	<li>Align: <a target="_blank" href="https://www.w3schools.com/css/css_align.asp">W3Schools</a></li>
	<li>Combinators: <a target="_blank" href="https://www.w3schools.com/css/css_combinators.asp">W3Schools</a></li>
	<li>Pseudo-class: <a target="_blank" href="https://www.w3schools.com/css/css_pseudo_classes.asp">W3Schools</a></li>
	<li>Pseudo-element: <a target="_blank" href="https://www.w3schools.com/css/css_pseudo_elements.asp">W3Schools</a></li>
<li>
Navigation Bar: <a target="_blank" href="https://www.w3schools.com/css/css_navbar.asp
<ul>
<li>Vertical Bars: <a target="_blank" href="https://www.w3schools.com/css/css_navbar_vertical.asp">W3Schools</a></li>
<li>Horizontal Bars: <a target="_blank" href="https://www.w3schools.com/css/css_navbar_horizontal.asp">W3Schools</a></li>
</ul>
</li>

</ul>




<strong>Assignment: Style your 3-page website using what we covered & link your CSS externally.</strong>


February 10th - Day 4: Bootstrap

<ul>
<li>What is Bootstrap?: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp">W3Schools</a></li>
<li>How to link to Bootstrap: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp">W3Schools</a></li>
<li>Grid System: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_grid_basic.asp">W3Schools</a></li>
<li>Colors: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_colors.asp">W3Schools</a></li>
<li>Tables: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_tables.asp">W3Schools</a></li>
<li>Images: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_images.asp">W3Schools</a></li>
<li>Jumbotron: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_jumbotron.asp">W3Schools</a></li>
<li>Alerts: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_alerts.asp">W3Schools</a></li>
<li>Buttons: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_buttons.asp">W3Schools</a></li>
<li>Badges: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_badges.asp">W3Schools</a></li>
<li>Progress Bars: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_progressbars.asp">W3Schools</a></li>
<li>Spinners: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_spinners.asp">W3Schools</a></li>
<li>Pagination: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_pagination.asp">W3Schools</a></li>
<li>Cards: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_cards.asp">W3Schools</a></li>
<li>Dropdowns: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_dropdowns.asp">W3Schools</a></li>
<li>Collapse: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_collapse.asp">W3Schools</a></li>
<li>Navbars: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_navs.asp & <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp">W3Schools</a></li>
<li>Forms: <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_forms.asp">W3Schools</a></li>
</ul>

<strong>Assignment: Start the Home Bodies assignment. Due Date: February 14th!</strong> </div> 
 
 <div class="tab-pane fade" role=tabpanel id=dropdown2 aria-labelledby=dropdown2-tab> <p>Coming Soon</p> </div> </div> </div>




<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

						  
<!-- /Tabs -->

</div></div>


                                   




	  </section><!--//doc-section-->     
	  
                   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
													 </div><!--//content-inner-->
													 </div><!--//doc-content-->                    


<div class="doc-sidebar">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">                                <li><a class="scrollto" href="#syllabus">Syllabus</a></li>                                     
<!--li><a class="scrollto" href="#week1">Week 1</a></li>    
<li><a class="scrollto" href="#week2">Week 2</a></li>        
<li><a class="scrollto" href="#week3">Week 3</a></li>        
<li><a class="scrollto" href="#week4">Week 4</a></li>
<li><a class="scrollto" href="#week5">Week 5</a></li>
<li><a class="scrollto" href="#week6">Week 6</a></li>  
<li><a class="scrollto" href="#week7">Week 7</a></li>  
<li><a class="scrollto" href="#week8">Week 8</a></li>  
<li><a class="scrollto" href="#week9">Week 9</a></li>  
<li><a class="scrollto" href="#week10">Week 10</a></li>  
<li><a class="scrollto" href="#week11">Week 11</a></li> 
<li><a class="scrollto" href="#week12">Week 12</a></li--> 


</ul><!--//doc-menu-->

</nav>
</div><!--//doc-sidebar-->

</div><!--//doc-body-->
</div><!--//container-->
</div><!--//doc-wrapper-->             



<? include 'footerad.php'; ?>


<footer id="footer" class="footer text-center">
<div class="container">

<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->

<small class="copyright">Copyright &copy; <a href="https://jaxcodeacademy.com/">Jax Code Academy, Inc.</a></small>
</div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 