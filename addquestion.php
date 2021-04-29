<?php
    session_start();
    require_once 'Dao.php';
    $question = $_GET['question'];
    $ans = "No answer yet";
    $email = "defaultemail";
    $dao = new Dao();
    $dao->addQuestion($email,$question,$ans);
    header("location:faq.php");
    exit();