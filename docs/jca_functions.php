<?

$servername = "localhost";
$username = "jaxcodeacademy";
$password = "Jc@c@d3my";
$dbname = "jaxcodeacademy";


// Get Course Dates
function getcoursedates() {

$servername = "localhost";
$username = "jaxcodeacademy";
$password = "Jc@c@d3my";
$dbname = "jaxcodeacademy";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Day Courses
$sql = "SELECT * FROM bootcamps_courses WHERE active = '1' and dayornight='day'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["xdsm"]. " " . $row["xdsd"]. ", " . $row["xdsy"]. "<br>";
  }
} else {
  echo "0 results";
}
}

?>
