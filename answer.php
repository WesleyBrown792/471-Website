<?php
session_start();
require_once 'Dao.php';

$dao = new Dao();
$ID = $_POST['ID'];
$ans = $_POST['ans'];
$func = $_POST['func'];

$_SESSION['ID'] = $ID;
$_SESSION['ans'] = $ans;



$dao->answerQuestions($ans, $ID);