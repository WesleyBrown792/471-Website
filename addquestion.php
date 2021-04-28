<?php
    session_start();
    require_once 'Dao.php';

    $question = $_GET['question'];
    $ans = "No answer yet";
    $email = "defaultemail";

    $conn = $this->getConnection();
    $saveQ = "insert into questions (email, ask, ans) values (:email,:ask, :ans);";
    $q = $conn->prepare($saveQ);
    $q->bindParam(":email",$email);
    $q->bindParam(":ask",$question);
    $q->bindParam(":ans", $ans);
    $q->execute();