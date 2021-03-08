<?php
session_start();
require_once 'Dao.php';
$email=$_POST["email"];
$pass=$_POST["password"];
$dao = new Dao();

$salt = "totalyrandomjunkyouknow";
$newpass = hash('sha256',$pass.$salt);



if ($dao->userExists($email, $newpass)) {
    header("Location: signin.php");
} else {
    $_SESSION['authenticated'] = true;
    
    $dao->addUser($email, $newpass);
    header("Location: welcome.php");
    exit();
}