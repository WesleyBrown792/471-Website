<?php
session_start();
?>

<html>
    <head>
    <?php
         include "components/head.php";
    ?>
    </head>

    <div class="h-100">
        <?php
        include "components/nav.php";
        ?>
        
        <?php
            include "components/footer.php";
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<?php
if($_SESSION['access'] != 1){
?>
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

                    foreach($faq_json as $key => $value){
                        
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

<?php
}else{
?>
    <body>
        <?php
        include "components/nav.php";
        ?>

        <div>
            <form name="faq_form" id="faq_ans" enctype="multipart/form-data">
                    <div>
                        <div><label for="ID">Question ID</lable></div>
                        <input type="text" id="ID" name="ID" class="form-control" value="<?php if(isset($_SESSION['ID'])){echo ($_SESSION['ID']);}?>">
                    </div>
                    <div>
                        <div><label for="ans">Your Answer</lable></div>
                        <input type="text" id="ans" name="ans" class="form-control" value="<?php if(isset($_SESSION['ans'])){echo ($_SESSION['ans']);}?>">
                    </div>
                    <div>
                      <input type="submit" id="submit" value="Submit">
                    </div>
            </form>    
        </div>

        <div>
            <?php
                renderQuestions("questions");
            ?>
        </div>


        <?php
        include "components/footer.php";
        ?>
    </body>
<?php
}
?>

</html>