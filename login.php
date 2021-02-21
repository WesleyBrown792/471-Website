<?php
//this is what runs the logging in functionality
    session_start();
    include 'Dao.php';
    $dao = new Dao();
    $username = $_GET['email'];
    $password = $_GET['password'];
    /* if ($dao->userExists($username, $password)) {
        echo "Logged In";
    }
    else {
         header("Location: PATH/signin.php");
    } */
?>
