<?php
session_start();
if($_SESSION['authenticated'] != true){
    header("Location: index.php");
  }
?>

<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Create Event</title>
    <link rel="stylesheet" href="css/createevent.css">
    <?php
    include "components/head.php";
    ?>
</head>



<body class="h-100 d-flex flex-column">
    <?php
    include "components/nav.php";
    ?>
    <div class="h-100">
        <div class="container-xl p-0 flex-shrink-0 create-event-container">
            <div class="container create-event-form-container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col form-column">
                        <h3>Create Your Event</h3>
                        <form method="POST" action="event.php" onSubmit="location.href='eventlist.php';return false;">
                            <div class="form-group">
                                <input type="text" class="w-100" placeholder="Event Title *" value="<?php if (isset($_SESSION['eventname'])) {
                                        echo htmlentities($_SESSION['eventname']);
                                        } ?>" name="eventName"
                                        id="eventName" />
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="date" name="startDate" id="startDate" placeholder="Start Date *" value="<?php if (isset($_SESSION['startdate'])) {
                                                echo htmlentities($_SESSION['startdate']);
                                            } ?>" />
                                        <label for="startDate">Start Date</label>
                                    </div>
                                    <div class="col">
                                        <input type="time" name="startTime" id="startTime" placeholder="Start Time *" value="<?php if (isset($_SESSION['starttime'])) {
                                                echo htmlentities($_SESSION['starttime']);
                                            } ?>" />
                                        <label for="startTime">Start Time</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-top-padding">
                                <div class="row">
                                    <div class="col">
                                        <input type="date" name="endDate" id="endDate" placeholder="End Date *" value="<?php if (isset($_SESSION['enddate'])) {
                                                echo htmlentities($_SESSION['enddate']);
                                            } ?>" />
                                        <label for="endDate">End Date</label>
                                    </div>
                                    <div class="col">
                                        <input type="time" name="endTime" id="endTime" placeholder="End Time *" value="<?php if (isset($_SESSION['endtime'])) {
                                                echo htmlentities($_SESSION['endtime']);
                                            } ?>" />
                                        <label for="endTime">End Time</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group center-button">
                                <input type="submit" class="btnSubmit" value="Create Event" />
                            </div>
                        </form>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "components/footer.php";
    ?>
</body>

</html>
