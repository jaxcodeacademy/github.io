<?

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
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

// Set cookie for login
$cookie_name = "jaxcodekidsid";
$cookie_value = $row['student_id'];
setcookie($cookie_name, $cookie_value); // 86400 = 1 day


// keep track of login count
$jaxcodecount = $row['jaxcodecount'] + 1;
$sql = "UPDATE bootcamp_students SET jaxcodecount ='{$jaxcodecount}' WHERE email = '{$_POST['email']}'";

$conn->query($sql);



header("Location: index.php");
    }
} else {
    $errormessage = 'Invalid Login';
}
$conn->close();
}
// END of login

?>