<?php
session_start();
require_once 'Dao.php';
$email=$_POST["email"];
$pass=$_POST["password"];
$dao = new Dao();
$salt = "totalyrandomjunkyouknow";
$newpass = hash('sha256',$pass.$salt);
// $logged = "yes"; // trying to fix login issue, session variables not carrying over to other pages

if ($dao->userExists($email, $newpass)) {
    if($email == "admin@admin.com"){
        $_SESSION['access'] = 1;
        $_SESSION['authenticated'] = true;
        $_SESSION['isLoggedIn'] = "yes"; // cdavis addition, testing purposes
        header("Location: welcome.php"); // not redirecting here upon successful login
    }else{
        $_SESSION['authenticated'] = true;
        $_SESSION['isLoggedIn'] = "yes"; // cdavis addition, testing purposes
        header("Location: welcome.php"); // not redirecting here upon successful login
    }
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION['email'] = $email;
    // $logged = "no"; // cdavis addition, testing purposes
    $_SESSION['isLoggedIn'] = "no"; // cdavis addition, testing purposes
    header("Location: index.php");
}