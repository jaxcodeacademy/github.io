<?php
session_start();

if(!isset($_POST['addmovie'])) {

header('location: index.php');
}
else {

    require_once('db.inc.php');

    $sql = "INSERT INTO movies (movies_title, movies_genre)
VALUES ('{$_POST['movies_title']}', '{$_POST['movies_genre']}')";

if ($conn->query($sql) === TRUE) {
$_SESSION['message'] = "movieaddedok";
header("location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




}


