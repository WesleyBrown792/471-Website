<?php
session_start();
?>

<html>

    <head>
<!--     <link rel="stylesheet" href="css/index.css"> --> 
   <?php
    include "components/head.php";
    ?>
    </head>

    <body>
        <div>
        <?php
            include "components/nav.php";
        ?>
             <button type="button" href="createvent.php">Create an Event</button> 
             <button type="button" href="eventlist.php">See Events</button> 
             <button type="button" href="modifyprof.php">Modify Profile</button> 

        <?php
            include "components/footer.php";
        ?>
        </div>
    </body>

</html>