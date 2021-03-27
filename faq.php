<?php
session_start();
?>

<html>

<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="css/faq.css">
    <?php
    include "components/head.php";
    ?>
</head>

<body class="h-100 d-flex flex-column">
    <?php
    include "components/nav.php";
    ?>

    <div class="container py-3">
        <div class="row">
            <div class="col-10 mx-auto">
                <h2 class="text-center">Frequently Asked Questions</h2>
                <div class="accordion" id="faqExample">

                    <?php

                    $faq_json = json_decode(file_get_contents("faq.json"), true);

                    foreach ($faq_json as $key => $value) {

                        echo '<div class="card">'
                            . '<div class="card-header p-2" id="heading' . $key . '">'
                            . '<h5 class="mb-0">'
                            . '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse' . $key . '" aria-expanded="true" aria-controls="collapse' . $key . '">'
                            . 'Q: ' . $value['q']
                            . '</button></h5></div>'
                            . '<div id="collapse' . $key . '" class="collapse" aria-labelledby="heading' . $key . '" data-parent="#faqExample">'
                            . '<div class="card-body">'
                            . '<b>Answer:</b> ' . $value['a']
                            . '</div></div></div>';
                    }

                    ?>




                </div>

            </div>
        </div>
        <!--/row-->
    </div>
    <!--container-->


    <?php
    include "components/footer.php";
    ?>
</body>


</html>