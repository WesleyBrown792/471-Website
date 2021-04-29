<?php
session_start();
require_once 'Dao.php';
$email=$_POST["newEmail"];
$pass=$_POST["newPassword"];
$dao = new Dao();

$salt = "totalyrandomjunkyouknow";
$newpass = hash('sha256',$pass.$salt);



if ($dao->emailExists($email)) {
    header("Location: signin.php");
} else {
    $_SESSION['authenticated'] = true;
    
    $dao->addUser($email, $newpass);
    header("Location: welcome.php");
    exit();
}