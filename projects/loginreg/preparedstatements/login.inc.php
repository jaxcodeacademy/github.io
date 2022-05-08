<?php
session_start();

if(!isset($_POST['signin'])) {
include_once 'dbh.inc.php';

$email = $_POST['email'];
$pass  = password_hash($_POST['mypassword'], PASSWORD_DEFAULT);

/* create a prepared statement */
$stmt = $mysqli->prepare("SELECT * FROM patients WHERE usersPwd=? and usersEmail=?");
echo $sql;die;
/* bind parameters for markers */
$stmt->bind_param("ss", $pass,$email);

/* execute query */
$stmt->execute();

// THIS
$result = $stmt -> get_result();
if ($result->num_rows > 0) {
while ($row = $result -> fetch_assoc()) {
//echo $row['userid'].' '.$row['firstname'].' '.$row['lastname'].' '.$row['email'].' '.$pass;
$_SESSION['userid'] = $row['userid'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['name'] = $row['firstname'].' '.$row['lastname'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['email'] = $row['email'];
$_SESSION['patientketo'] = session_id();
header("Location: tracking.php");
}
} else {
echo 'no match';
}



} // end of isset 
else {
header("location: ../login.php");
}
// OR THIS
// Can't use * in SQL statement: SELECT firstname,lastname,email FROM patients WHERE userid=? and email=?


/* bind result variables */
//$stmt->bind_result($firstname,$lastname,$email);

/* fetch value */
/*
$stmt->fetch();

//printf("User ID %s belongs to %s %s at %s\n", $city, $district,$lastname,$email);

$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['email'] = $email;
echo $_SESSION['firstname'].'<br>';
echo $_SESSION['lastname'].'<br>';
echo $_SESSION['email'].'<br>';*/
?>