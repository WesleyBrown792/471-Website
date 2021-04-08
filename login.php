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
        $_SESSION['isLoggedIn'] = "yes";
        header("Location: signin.php");
    }else{
        $_SESSION['authenticated'] = true;
        $_SESSION['isLoggedIn'] = "yes";
        header("Location: welcome.php");
    }
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION['email'] = $email;
    $_SESSION['isLoggedIn'] = "no";
    header("Location: signin.php");
}