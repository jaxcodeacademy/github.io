<?
session_start();

if(isset($_POST['email'])) { 
include 'jca_functions.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email FROM bootcamp_students WHERE email = '{$email}' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
    
    // Generate 10 digit token
    $token = 'a1s2d3f4g5h6j7k8l9p0z0x9c8v7b6n5m4';
	$token = str_shuffle($token);
	$token = substr($token,0,10);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE bootcamp_students SET token='{$token}' WHERE email='{$email}'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

  
    
    
    
    
    
    
    
$_SESSION['message'] = '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sent!</strong> Check you email. Don\'t forget to check your junk and spam folders.
</div>';

$to_email = $_POST['email'];
$subject = 'Password Reset for your Jax Code account';
$message = 'Someone has requested a password reset. Ignore if this was not you.

Follow this link to change your password:
https://jaxcode.com/docs/newpassword.php?token='.$token.'
';
$headers = 'From: support@jaxcode.com';
mail($to_email,$subject,$message,$headers);

header("Location: recoverpassword.php");
    }
} else {
    echo "0 results: email not found";
}

mysqli_close($conn);

}


?>