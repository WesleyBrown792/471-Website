<?php
session_start();
//should check to see if the user is logged in unless we add a block on the welcome page for that
?>

<html>

<head>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Create Event</title>
    <link rel="stylesheet" href="css/signin.css">
    <?php
    include "components/head.php";
    ?>
</head>

<body>
    <div>
        <?php
        include "components/nav.php";
        ?>
        <h1>Create Event</h1>
        <form method="POST" action="login.php" onSubmit="return Empty()">
            <div class="form-group">
                <input type="text" placeholder="Event Title *" value="" name="eventName" id="eventName"/>
            </div>
            <!-- I think dates and times should be side by side.
            I also think dates to have a popup calander and times should have
            drop down selector.
            -->
            <div class="form-group">
                <input type="date" name="startDate" id="startDate" placeholder="Start Date *" value="" />
            </div>
            <div class="form-group">
            <input type="time" name="startTime" id="startTime" placeholder="Start Time *" value="" />
            </div>
            <div class="form-group">
            <input type="date" name="endDate" id="endDate" placeholder="End Date *" value="" />
            </div>
            <div class="form-group">
            <input type="time" name="endTime" id="endTime" placeholder="End Time *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" value="Create Event" />
            </div>
        </form>
    </div>
</body>

</html>
