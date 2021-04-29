<?php
    session_start();
    require_once 'Dao.php';
    $question = $_GET['question'];
    $ans = "No answer yet";
    $email = "defaultemail";
    $conn = $this->getConnection();
    $q = $conn->prepare("INSERT INTO questions (questionEmail, questionAsk, questionAnswer) VALUES (?,?,?)");
    $q->bind_param("sss", $email, $question, $ans);
    $q->execute();
    $q->close();
    $conn->close();
    header("location:faq.php");
    exit();