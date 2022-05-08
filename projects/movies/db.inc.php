<?php
$servername = "localhost";
$username = "drf";
$password = "zQdIbQI11qLJuxVo";
$dbname = "drf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>