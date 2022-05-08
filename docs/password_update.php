<?
session_start();

if($_POST['password'] != $_POST['passwordconfirm']) {
$_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Error!</strong> Passwords do not match.
</div>';
	

	
	
	header("Location: profile.php");
}



include 'jca_functions.php';


// b56e0b4ea4962283bee762525c2d490f
// Welcome456

$newpassword = md5($_POST['password']);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE bootcamp_students SET password='{$newpassword}' WHERE student_id='{$_SESSION['student_id']}'";

if (mysqli_query($conn, $sql)) {

$_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Password Updated.
</div>';
header("Location: profile.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);




?>