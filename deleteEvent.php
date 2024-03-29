<?php
    session_start();
    require_once 'Dao.php';

    $dao = new Dao();
    $eventName = $_GET['eventName'];

    $sql = "DELETE FROM events WHERE eventName = ?";

    $conn = $dao->getConnection();

    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_bind_param($stmt, "s", $eventName);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location:eventlist.php");

    exit();