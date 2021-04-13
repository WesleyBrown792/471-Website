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
            
            foreach($events as $events){
                echo "<tr><td>". htmlspecialchars($events['eventName']) . "</td><td>" . htmlspecialchars($events['eventCreatorEmail']) . "</td><td>" . htmlspecialchars($events['eventParticipants']) . "</td></tr>";
            }
        ?>
        </table>
   <?php
    }
    ?>

<?php
function renderMyTable($user){
    $dao = new Dao();
    $events = $dao->getMyEvents($user);
    if(count($events)==0){
        echo "You have not made any events yet";
        exit;
    }
    ?>
    <table>
        <thead>
            <th>Event ID</th><th>Events Name</th><th>Event Description<th>
        </thead>
        <?php
            
            foreach($events as $events){
                echo "<tr><td>". htmlspecialchars($events['eventID']) . "</td><td>" . htmlspecialchars($events['eventName']) . "</td><td>" . htmlspecialchars($events['eventDescription']) . "</td></tr>";
            }
        ?>
        </table>
   <?php
    }
    ?>

<?php
function renderQuestions($tablename){
    $dao = new Dao();
    $questions = $dao->getQuestions();
    if(count($questions)==0){
        echo "No Questions Yet";
        exit;
    }
    ?>
    <table>
        <thead>
            <th>Question ID</th><th>Question Asked<th>
        </thead>
        <?php
            
            foreach($questions as $questions){
                if($questions[questionAnswer]){
                    echo "<tr><td>". htmlspecialchars($questions['questionID']) . "</td><td>" . htmlspecialchars($questions['questionAsk']) . "</td></tr>";
                }
            }
        ?>
        </table>
   <?php
    }
    ?>

<?php
function renderUserQuestions($tablename){
    $dao = new Dao();
    $questions = $dao->getUserQuestions();
    if(count($questions)==0){
        echo "No Questions Yet";
        exit;
    }
    ?>
    <table>
        <thead>
            <th>Question Asked<th>
        </thead>
        <?php
            
            foreach($questions as $questions){
                if($questions[questionAnswer]){
                    echo "<tr><td>" . htmlspecialchars($questions['questionAsk']) . "</td></tr>";
                }
            }
        ?>
        </table>
   <?php
    }
    ?>