<?php
session_start();
require_once 'Dao.php';
$email=$_POST["email"];
$pass=$_POST["password"];
$dao = new Dao();
$salt = "totalyrandomjunkyouknow";
$newpass = hash('sha256',$pass.$salt);

if ($dao->userExists($email, $newpass)) {
    if($email == "admin@admin.com"){
        $_SESSION['access'] = 1;
        $_SESSION['authenticated'] = true;
        header("Location: welcome.php"); // not redirecting here upon successful login
    }else{
        $_SESSION['authenticated'] = true;
        header("Location: welcome.php"); // not redirecting here upon successful login
    }
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION['email'] = $email;
    // header("Location: index.php");
    header("Location: welcome.php"); // logging in with our test@test.com email and Pa$$w0rd is taking us here instead, not logging in correctly
}