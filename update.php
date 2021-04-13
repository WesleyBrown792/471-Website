<?php
session_start();
require_once 'Dao.php';

$dao = new Dao();
$ID = $_POST['ID'];
$update = $_POST['update'];
$func = $_POST['func'];

$_SESSION['ID'] = $ID;
$_SESSION['update'] = $update;



$dao->updateMyEvents($update, $ID);