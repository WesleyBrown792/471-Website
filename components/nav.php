<html>
<?php
if(session_status() !== PHP_SESSION_ACTIVE){
   session_start(); 
}
?>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php"><img src="img/favicon.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php">Home</a>
                        <a class="nav-item nav-link" href="eventlist.php">Event List</a>
                        <a class="nav-item nav-link" href="faq.php">FAQ</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <?php

                        if(isset($_SESSION['authenticated'])){ 
                            if($_SESSION['authenticated']){ // logged in
                                 echo "<a class='nav-item nav-link' href='logout.php'>Logout</a>";

                            } else { // not logged in
                                 echo "<a class='nav-item nav-link' href='signin.php'>Sign-in / Create Account-Set</a>";
                              }
                        } else { // session variable not set
                            echo "<a class='nav-item nav-link' href='signin.php'>Sign-in / Create Account</a>";
                        }
                    ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</body>

</html>