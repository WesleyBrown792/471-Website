<?php
session_start();
require_once 'Dao.php';
$eventname=$_POST["eventName"];
$startdate=$_POST["startDate"];
$starttime=$_POST["startTime"];
$enddate=$_POST["endDate"];
$endtime=$_POST["endTime"];
$email = $_SESSION['user'];
$startdatetime=$startdate . " " . $starttime;
$enddatetime=$enddate . " " . $endtime;
$description="default";
$participants=0;
$dao = new Dao();

//print "$eventname , $startdatetime , $enddatetime , $email , $description , $participants";
$dao->addEvent($eventname, $startdatetime, $enddatetime, $email, $description, $participants);
//echo "sad";
header("Location: eventlist.php");
exit();