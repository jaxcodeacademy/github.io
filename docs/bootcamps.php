<? 
$breadcrumb = 'Bootcamps';
$bodycolor = "body-orange";
include 'header.php'; 


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// check if user is already enrolled in a bootcamp
$enrolled = '0';
$course_id = '';
$sql = "SELECT student_id,course_id FROM bootcamp_enrollments WHERE student_id = '{$_SESSION['student_id']}' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$enrolled = '1';
	$course_id = $row['course_id'];
    }
} else {

}
?>
<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="icon fa fa-user-plus"></i> Bootcamps</h1>                    <!--div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div--><br><br>                
</div><!--//doc-header-->
<div class="doc-body">
<div class="doc-content">
<div class="content-inner">

<? if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }?>



<section id="enrollmentform" class="doc-section">
<h2 class="section-title" style="color: #58bbee;">Enroll in Coding Bootcamp</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">



<p>
<style>
input[type=radio] {
    width: 20px;
    height: 20px;
}
</style>
<div class="table-responsive">
<table class="table table-striped table-hover">
<tr style="border-color:dodgerblue;">
<th>Select</th>
<th>Formats</th>


<th>Start</th>
<th>End</th>
<th>Bootcamp</th>

<th>Location</th>
<th>Tuition</th>
<!--th><sup style="color:purple;">*</sup>Deposit</th>
<th style="background-color:#FFFFE0;" class="text-center">Financial Aid Available?</th-->
</tr>

<?




$sql = "SELECT * FROM bootcamps_courses WHERE active = '1' ORDER BY monthnumber ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {





echo '<tr><td class="">';

// FORM
echo '<form action="bootcamp_process.php" method="POST">
<input type="hidden" name="tuition" value="'.$row['tuition'].'">
<input type="hidden" name="course_id" value="'.$row['course_id'].'">';
if($course_id == $row['course_id']) { 
echo '<button type="submit" class="btn btn-default btn-xs" name="addbootcamp" disabled></i>Enroll</button>'; 
} else {
echo '<button type="submit" class="btn btn-default btn-xs" name="addbootcamp"></i>Enroll</button>'; 
}
echo '</form>';
// /FORM

echo '</td>';

if($row['dayornight'] == 'night'){
echo '<td ><span class="label" style="background-color:#000000;">Night</span> <span class="label label-info">Online</span> </td>';
} else { 
echo '<td ><span class="label label-primary">Day</span> <span class="label label-success">In-person</span> <span class="label label-info">Online</span> <a href="#" data-toggle="popover" data-trigger="hover" title="Hybrid Coding Bootcamp" data-content="Mixture of in-person and online. Customize to fit your schedule." class="label label-warning" style="color:#ffffff;">Hybrid</a></td>';
}



echo '<td>'.$row["xdsm"].' '.$row["xdsd"].', '.$row["xdsy"].'</td>';
echo '<td>'.$row["xdem"].' '.$row["xded"].', '.$row["xdey"].'</td>';
if($course_id == $row['course_id']) { 
echo '<td>'.$row["bootcamp"].' <br><span class="text-center" style="background-color:yellow;">ENROLLED</span>. <a href="myaccount.php" class="btn btn-info btn-xs" style="color:white;">Make a Payment</a></td>';
echo '<td>'.$row["location"].' <br>or online via live-stream</td>';
} else {
echo '<td>'.$row["bootcamp"].' </td>';
if($row["location"] == 'Springfield, Jax') {
echo '<td>'.$row["location"].'</td>';
} else {
	if($row['dayornight'] == 'night'){
	echo '<td>Online</td>';
	} else {
	echo '<td>'.$row["location"].'</td>';
	}
}
}
echo '<td>$'.number_format($row["tuition"], 2).'</td>';
//echo '<td>$3,500</td>';
//echo '<td>$'.number_format($row["deposit"], 2).'</td>';
/*
if($row['aid'] == 'yes') {
echo '<td class="text-center" style="background-color:#FFFFE0;">yes  <i class="fa fa-check" aria-hidden="true" style="color:green;"></td>';
} else {
echo '<td class="text-center" style="background-color:#FFFFE0;">no  <i class="fa fa-times" aria-hidden="true" style="color:red;"></td>';
}
*/
echo '</tr>';
"<br>";
}
} else {
echo '<tr><td colspan="7">0 enrollments</td></tr>';
}
?>
</table>
<?

echo '<br><br><strong>Enrollment Changes</strong>: To withdraw from a course call the office 904-300-3494. To change to a different class click on the ENROLL button for that course.';

?>


<br><br>
<strong>How long is bootcamp?</strong>: Coding bootcamp is 3 months long + an optional 3 months internship.<br><br>


<strong>Our Do-Over Policy</strong>: You can retake any bootcamp for free. If you feel like you need to take the course again you can at no charge.
<br><br>
<strong>3 + 3 = 6</strong>: Build that resume and keep learning. All students are invited to enroll in our 3-month Internship program after bootcamp. <br>3 + 3 = 6 &larr; three months of bootcamp and three months internship = six months of training.
<br><br>
<strong>Become a Teaching Assistant</strong>: Qualified students or students who complete our 3 + 3 = 6 track can apply to be a teaching assistant at Jax Code Academy.
<br><br>
<strong>Externships and Shadowing</strong>: Opportunities are available to work for local companies or shadow a mentor. Available to all graduates.
<br><br>
<strong>Job Placement</strong>: We work with several local recruiters like Robert Half Technology and Apex Systems, to place you in your dream job.
</div><br><br>


</div>
</div>
</section><!--//doc-section-->     


















</div><!--//content-inner-->
</div><!--//doc-content-->                    


<div class="doc-sidebar hidden-xs">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu" data-spy="affix">
<li><a class="scrollto" href="#enrollmentform">Enroll</a> </li>
<li><a  href="myaccount.php" class="btn btn-default btn-xs">Make a Payment</a> </li>
</ul><!--//doc-menu-->
</nav>
</div><!--//doc-sidebar-->



</div><!--//doc-body-->
</div><!--//container-->
</div><!--//doc-wrapper-->             

</div>

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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html> 