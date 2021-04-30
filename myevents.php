<?php
session_start();
require_once 'gettables.php';
require_once 'Dao.php'
?>

<html>

<head>
    <?php
    include "components/head.php";
    ?>
    <link rel="stylesheet" href="css/eventlist.css">
</head>

<body>
    <?php
    include "components/nav.php";
    ?>
    <div>
        <form name="myevent_form" id="myevent_form" enctype="multipart/form-data">
            <div>
                <div><label for="ID">Event ID</label></div>
                    <input type="text" id="ID" name="ID" class="form-control" value="<?php if(isset($_SESSION['ID'])){echo ($_SESSION['ID']);}?>">
                </div>
                <div>
                    <div><label for="update">New Description</label></div>
                    <input type="text" id="update" name="update" class="form-control" value="<?php if(isset($_SESSION['update'])){echo ($_SESSION['update']);}?>">
                </div>
                <div>
                    <input type="submit" id="update" value="Update">
                    <input type="submit" action="deleteEvent.php" value="Delete"
                </div>
            </div>
        </form>
    </div>

    <div>
        <?php
            renderMyTable($_SESSION['user']);
        ?>
    </div>

</body>
<?php
require "components/footer.php";
?>

</html>