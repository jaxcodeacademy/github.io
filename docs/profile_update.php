<?
session_start();
include 'jca_functions.php';


$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$webfactionusername = filter_var($_POST['webfactionusername'], FILTER_SANITIZE_STRING);
$webfactionpassword = filter_var($_POST['webfactionpassword'], FILTER_SANITIZE_STRING);
$portfoliourl = filter_var($_POST['portfoliourl'], FILTER_SANITIZE_STRING);




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE bootcamp_students SET firstname='{$firstname}', lastname='{$lastname}', email='{$email}', phone='{$phone}', webfactionusername='{$webfactionusername}', webfactionpassword='{$webfactionpassword}', portfoliourl='{$portfoliourl}', bootcampclass='{$_POST['bootcampclass']}' WHERE student_id='{$_SESSION['student_id']}'";

if ($conn->query($sql) === TRUE) {

 $_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Profile Updated.
</div>';
    header("Location: profile.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>