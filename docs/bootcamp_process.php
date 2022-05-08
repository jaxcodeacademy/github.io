<?
session_start();

if(isset($_POST['addbootcamp'])) {

include 'jca_functions.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bootcamp_enrollments WHERE student_id = '{$_SESSION['student_id']}' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// record found UPDATE enrollment
	
$sql2 = "UPDATE bootcamp_enrollments SET course_id ='{$_POST['course_id']}', tuition ='{$_POST['tuition']}' WHERE student_id='{$_SESSION['student_id']}' ";

if (mysqli_query($conn, $sql2)) {
    $_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
			 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			 <strong>Success!</strong> You have updated your enrollment.
		   </div>';

		   header("Location: bootcamps.php");
} else {
     echo "Error updating record: " . $sql2 . "<br>" . mysqli_error($conn);
}
	
	
	
	
	
	
		  

} else {
	// record not found INSERT enrollment
	// insert new course enrollment
		   $sql2 = "INSERT INTO bootcamp_enrollments (course_id, student_id, tuition, status)
		   VALUES ('{$_POST['course_id']}', '{$_SESSION['student_id']}', '{$_POST['tuition']}', 'enrolled')";
		   if (mysqli_query($conn, $sql2)) {
			  $_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
			 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			 <strong>Success!</strong> You are enrolled in bootcamp.
		   </div>';

		   header("Location: bootcamps.php");
		   } else {
			   echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		   }

} // end of if/else > 0




} // if isset addbootcamp POST

?>