<?php
session_start();
require_once 'Dao.php';
$eventname=$_POST["eventname"];
$startdate=$_POST["startdate"];
$starttime=$_POST["starttime"];
$enddate=$_POST["enddate"];
$endtime=$POST["endtime"];
$startdatetime=$startdate . " " . $starttime;
$enddatetime=$enddate . " " . $endtime;
$description="default";
$participants=0;
$dao = new Dao();
echo "bungis";
$dao->addEvent($eventname, $startdatetime, $enddatetime, $_SESSION['email'], $description, $participants);
echo "sad";
header("Location: eventlist.php");
exit();