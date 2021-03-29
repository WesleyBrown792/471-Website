<?php
session_start();
require_once 'Dao.php';

$dao = new Dao();
$ID = $_POST['ID'];
$ans = $_POST['ans'];
$func = $_POST['func'];
$layout = $_POST['layout'];
$info = $_POST['info'];
$total = ($info + $func + $layout)/3;
$valid=0;

$_SESSION['ID'] = $ID;
$_SESSION['ans'] = $ans;



$dao->answerQuestions($ans, $ID);