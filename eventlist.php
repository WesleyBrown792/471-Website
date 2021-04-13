<?php
session_start();
require_once 'gettables.php';
?>

<html>

<head>
    <?php
    include "components/head.php";
    ?>
    <link rel="stylesheet" href="css/eventlist.css">
</head>

<body class="h-100 d-flex flex-column">
    <?php
    include "components/nav.php";
    ?>
    <div class="container-xl p-0 event-list-page-container" id='page-container'>
        <div class="event-list-container">
            <?php
            renderTable("events");
            ?>
        </div>
    </div>

    <div>
        <button type="button" onclick="myevents.php">See and edit you Events</button>
    </div>

</body>
<?php
require "components/footer.php";
?>

</html>