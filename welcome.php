<?php
session_start();
if($_SESSION['authenticated']){
    
  }else{
    header("Location: index.php");
  }
?>

<html>

<head>
    <!--     <link rel="stylesheet" href="css/index.css"> -->
    <?php
    include "components/head.php";
    ?>
    <link rel="stylesheet" href="css/welcome.css">
</head>

<body class="h-100 d-flex flex-column">
    <?php
    include "components/nav.php";
    ?>
    <div class="container-xl p-0 welcome-page-container">

        <div class="welcome-page-button-container">
            <button type="button" onclick="createvent.php">Create an Event</button>
            <br>
            <button type="button" onclick="eventlist.php">See Events</button>
            <br>
            <button type="button" onclick="modifyprof.php">Modify Profile</button>
        </div>




    </div>
    <?php
    include "components/footer.php";
    ?>
</body>

</html>