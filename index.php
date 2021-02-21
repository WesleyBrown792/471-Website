<html>

<head>
    <link rel="stylesheet" href="css/index.css">
    <?php
    include "components/head.php";
    ?>
</head>

<?php
//this is the homepage 
//require_once "components/nav.php";
?>

<body class="h-100">
    <div class="h-100">
        <?php
        include "components/nav.php";
        ?>
        <div id="full-width-body-container" class="container-fluid p-0">
            <div class="w-100 first-homepage-section">
                <div class="container-xl first-homepage-section-container">
                    <div class="first-section-heading w-100">
                        <h1 class="home-page-heading">Group Organizing for Dummies</h1>
                    </div>
                    <div class="first-section-list w-100">
                        <ul>
                            <li>Schools</li>
                            <li>Family</li>
                            <li>Business</li>
                            <li>Volunteers</li>
                            <li>Sports</li>
                            <li>Church</li>
                            <li>Temple</li>
                        </ul>
                    </div>
                    <div class="first-section-create-button w-100">
                        <a href="signin.php">
                            <button type="button" class="btn  btn-warning btn-lg">Create a Sign-Up</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-100 second-homepage-section">

            </div>
        </div>
    </div>
</body>

</html>