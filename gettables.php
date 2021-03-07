<?php
require_once 'Dao.php';
?>

<?php
function renderTable($tablename){
    $dao = new Dao();
    $events = $dao->getEvents();
    if(count($events)==0){
        echo "No Events Yet";
        exit;
    }
    ?>
    <table>
        <thead>
            <th>Event Name</th><th>Events Creater</th><th>Event Paticipants<th>
        </thead>
        <?php
            //I think that the event name should be a link to the page of the event
            foreach($events as $events){
                echo "<tr><td>". htmlspecialchars($events['eventName']) . "</td><td>" . htmlspecialchars($events['eventCreatorEmail']) . "</td><td>" . htmlspecialchars($events['eventParticipants']) . "</td></tr>";
            }
        ?>
        </table>
   <?php
    }
    ?>