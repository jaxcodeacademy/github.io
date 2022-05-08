<? 
$breadcrumb = 'Jobs';
$bodycolor = "body-purple";
include 'header.php'; 
?>
<link href="winmarkltd-BootstrapFormHelpers-d4201db/dist/css/bootstrap-formhelpers.css" rel="stylesheet">
<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="fa fa-search" aria-hidden="true"></i> Job Search</h1>
<!--div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div--><br><br>
</div><!--//doc-header-->
<div class="container">
<div class="row">
<div class="col-md-12">


<? if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }?>

<h2 class="section-title">Basic Information</h2><br>
<div id="gettingstarted-myinfo"  class="section-block">


</div>
</div><!--//content-inner-->
</div><!--//doc-content-->





</div><!--//doc-body-->              
</div><!--//container-->
</div><!--//doc-wrapper-->

<? include 'footerad.php'; ?>

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

<script src="winmarkltd-BootstrapFormHelpers-d4201db/dist/js/bootstrap-formhelpers.js"></script>
	<script src="winmarkltd-BootstrapFormHelpers-d4201db/js/bootstrap-formhelpers-phone.js"></script>
	<!-- Bootstrap Helpers -->


</body>
</html> 

