<?php
session_start();
require_once 'gettables.php';
?>

<html>

    <head>

    </head>

    <body>
        <div>
            <?php
                include "components/nav.php";
            ?>
            <div id='page-container'>
                <?php
                    renderTable("events");
                ?>
            </div>
        </div>
            <?php
                include "components/footer.php";
            ?>
        </div>
    </body>

</html>