<? 
session_start();
// Login Form Submitted
if(isset($_POST['submit'])) {
include 'jca_functions.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$errormessage = '';
$encryptedpassword = md5($_POST['password']);

$sql = "SELECT * FROM bootcamp_students WHERE email = '{$_POST['email']}' and password = '{$encryptedpassword}' and status = '1'";
//echo $sql;die;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

// Set cookie for login
$cookie_name = "jaxcodeid";

$cookie_value = "granted";
$_SESSION['student_id'] = $row['student_id'];
$_SESSION['currentstudent'] = $row['currentstudent'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['opalstackpass'] = $row['opalstackpass'];
$_SESSION['mariadbpass'] = $row['mariadbpass'];
setcookie($cookie_name, $cookie_value); // 86400 = 1 day

////////////// added oct 31, 2020 ////////////////


$sql = "SELECT course_id FROM bootcamp_enrollments WHERE student_id='{$_SESSION['student_id']}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {


$sql2 = "SELECT * FROM bootcamps_courses WHERE course_id='{$row['course_id']}'";
$result2 = mysqli_query($conn, $sql2);

while($row2 = mysqli_fetch_assoc($result2)) {
$_SESSION['location'] = $row2['location'];
$_SESSION['datestart'] = $row2['xdsm'].' '.$row2['xdsd'].', '.$row2['xdsy'];
$_SESSION['dateend'] =  $row2['xdem'].' '.$row2['xded'].', '.$row2['xdey'];
$_SESSION['bootcamp'] = $row2['bootcamp'];
$_SESSION['format'] = $row2['format'];
$_SESSION['dayornight'] = $row2['dayornight'];


// Cybersecurity course is 1, Web Dev is 2
if($_SESSION['bootcamp'] == 'Cybersecurity') {
$_SESSION['course'] = '1';
} else {
$_SESSION['course'] = '2';

}

}


}}




//////////////////////////////////////////////////



// keep track of login count
$jaxcodecount = $row['jaxcodecount'] + 1;
$sql = "UPDATE bootcamp_students SET jaxcodecount ='{$jaxcodecount}' WHERE email = '{$_POST['email']}'";
$conn->query($sql);



header("Location: index.php");
    }
} else {
    $_SESSION['message'] = '<div class="alert alert-danger">
  <strong>ERROR!</strong> Invalid Login
</div>';
    header("Location: index.php");
}
$conn->close();
}
// END of login

?>