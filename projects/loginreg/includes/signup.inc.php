<?php

if(isset($_POST['signup'])) {
  
$usersFirstname = $_POST['firstname'];
$usersLastname = $_POST['lastname'];
$usersEmail = $_POST['email'];
$usersPwd = $_POST['pwd'];
$usersPwdRepeat = $_POST['pwdrepeat'];

include_once 'dbh.inc.php';
include_once 'functions.inc.php';

// Error Handlers

if (emptyInputSignup($usersFirstname, $usersLastname, $usersEmail, $usersPwd, $usersPwdRepeat) != false) {
  header("location: ../signup.php?error=emptyinput");
  exit;
}

if (invalidEmail($usersEmail) != false) {
  header("location: ../signup.php?error=invalidemail");
  exit;
}

if (passwordMatch($usersPwd, $usersPwdRepeat) != false) {
  header("location: ../signup.php?error=differentpasswords");
  exit;
}

if (invalidPassword($usersPwd) != false) {
  header("location: ../signup.php?error=invalidpassword");
  exit;
}

if (emailExists($conn, $usersEmail) != false) {
  header("location: ../signup.php?error=emailexists");
  exit;
}

// add error handler for password length and character inclusion

// No errors, go ahead and create the account by calling createUser function

createUser($conn, $usersFirstname, $usersLastname, $usersEmail, $usersPwd);



} // if isset $_POST['signup']
else {
  header("location: signup.php");
  exit;
}