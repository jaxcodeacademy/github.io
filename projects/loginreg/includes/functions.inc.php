<?php

function emptyInputSignup($usersFirstname, $usersLastname, $usersEmail, $usersPwd, $usersPwdRepeat) {
    
    if (empty($usersFirstname) || empty($usersLastname) || empty($usersEmail) || empty($usersPwd) || empty($usersPwdRepeat)) {
        $result = true;
    } 
        else {
        $result = false;
    }
    return $result;
}




function invalidEmail($usersEmail) {
    
    if (!filter_var($usersEmail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } 
        else {
        $result = false;
    }

    return $result;
}




function passwordMatch($usersPwd, $usersPwdRepeat) {
    
    if ($usersPwd !== $usersPwdRepeat) {
        $result = true;
    } 
        else {
        $result = false;
    }

    return $result;
}




function invalidPassword($usersPwd) {
    
    if (strlen($usersPwd) < 8) {
        $result = true;
       } else {
        $result = false;
       }

    return $result;
}




function emailExists($conn, $usersEmail) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    //echo $sql;die;
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailedx");
        exit;
    }

    mysqli_stmt_bind_param($stmt, "s", $usersEmail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}




function createUser($conn, $usersFirstname, $usersLastname, $usersEmail, $usersPwd) {
    $sql = "INSERT INTO users (usersFirstname, usersLastname, usersEmail, usersPwd) values (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit;
    }

    $pwdEncrypted = password_hash($usersPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $usersFirstname, $usersLastname, $usersEmail, $pwdEncrypted);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit;
}

