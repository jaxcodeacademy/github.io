<?
session_start();

if($_POST['password'] != $_POST['passwordconfirm']) {
$_SESSION['message'] = '<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Error!</strong> Passwords do not match.
</div>';
header("Location: newpassword.php?token=".$_POST['token']."");die;
}



include 'jca_functions.php';
// old password = 6864992b21e51acfc1aad55155df1d8d
$newpassword = md5($_POST['password']);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE bootcamp_students SET password='{$newpassword}', token='' WHERE token='{$_POST['token']}'";

if (mysqli_query($conn, $sql)) {

$_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Password Updated.
</div>';
header("Location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);




?>