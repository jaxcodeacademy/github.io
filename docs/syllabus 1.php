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
<h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Web Developer Bootcamp</h1>                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>                </div><!--//doc-header-->
<div class="doc-body">
<div class="doc-content">
<div class="content-inner">
<section id="syllabus" class="doc-section">
<h2 class="section-title">Syllabus</h2>
<div class="section-block">                                    

<div class="row">
<div class="col-md-6">
Student ID: <?=$_SESSION['student_id']?><br>
Bootcamp: <?=$_SESSION['bootcamp']?>
					 



						  



<? 

// Include correct syllabus
if($_SESSION['currentstudent'] == '1') {



	if($_SESSION['course'] == '1') {
	echo 'hello';
	include 'lessonlistcyber.php';
	
	echo '<p>Below is the syllabus for the Web Developer Bootcamp. We will be using some of these lessons.</p>';
	
	include 'lessonlistwebdev.php';
	}
	
	if($_SESSION['course'] == '2') {
	include 'lessonlistwebdev.php';
	}








} else {
echo 'Syllabus not available until you complete your registration. Contact us at support@jaxcode.com if you have and the syllabus is not displaying';


}?>


</ul>


</div>
<div class="col-md-6">

<a href="https://vimeo.com/user99332130/videos" target="_blank" class="btn btn-info" style="color:#ffffff;">Video Lessons at Vimeo</a><br><br>

<strong style="color:#000000;">Bootcamps</strong><br><br>

<div class="well"><span style="color:#000000;">Day Sessions</span> (in-person or online)<br><br>
<strong>Web Developer</strong><br>
Monday through Thursday, 9am to 1pm<br>
<a href="https://jaxcodeacademy.my.webex.com/jaxcodeacademy.my/j.php?MTID=m13c37d8190611a4d3814f74a55aad310" target="_blank">Webex Live Stream Link</a> <span class="text-muted" style="font-size:smaller;">(d)</span>
<br>Lead Instructor: Dennis Swiggett (dennis@jaxcode.com)
<br>Teaching Assistant: Elizabeth Wyatt (liz@jaxcode.com)
<br><br>


<strong>Cybersecurity</strong><br>
Monday through Thursday, 9am to 1pm<br>

<a href="https://support-239.my.webex.com/support-239.my/j.php?MTID=m06576d1e49ffde60ce92f34fe074555f" target="_blank">Webex Live Stream Link</a> <span class="text-muted" style="font-size:smaller;">(s)</span>
<br>Lead Instructor: Dr. Fitzmeyer (drf@jaxcode.com)
<br>Teaching Assistant: Brandon Golden (brandon@jaxcode.com)
</div>


<div class="well"><span style="color:#000000;">Night Session</span>  (online only)<br><br>
<strong>Web Developer</strong><br>
Monday through Thursday, 7:30pm to 10:30pm
<br>Lead Instructor: Blake Seipler (blake@jaxcode.com)
<br>Teaching Assistant: Nick DeMartino (nick@jaxcode.com)
<br>Live Stream: Web Developer night course will be using Discord. 
If you don't have a discord account, make one at <a href="https://discord.com" target="_blank">discord.com</a>. <a href="https://discord.gg/6p9y7ppEwb" target="_blank">Discord Live Stream Link</a>
</div>

<br><br>
<a href="https://awwapp.com/" target="_blank" class="btn btn-success" style="color:#ffffff;">Online Whiteboard</a>



<!--iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York&amp;src=amF4Y29kZWFjYWRlbXlAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043&amp;showCalendars=0&amp;showTabs=0&amp;mode=AGENDA" style="border:solid 1px #777" width="400" height="600" frameborder="0" scrolling="no"></iframe-->


			
						 
						 




</div>
</div>


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