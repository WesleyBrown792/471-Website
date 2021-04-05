<?php
session_start();
$_SESSION['authenticated'] = false;
$_SESSION["access"] = -1;
?>

<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="login.js"></script>
    <title>Login/Create Account</title>
    <link rel="stylesheet" href="css/signin.css">
    <?php
    include "components/head.php";
    ?>
</head>

<body class="h-100 d-flex flex-column">
    <?php
    include "components/nav.php";
    ?>

    <div class="form-wrapper">
        <div class="container form-container d-flex justify-content-center">
            <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Login</h3>
                        <form method="POST" action="login.php" onSubmit="return Empty()">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email *" value="<?php if (isset($_SESSION['email'])) {
                                                                                                                echo htmlentities($_SESSION['email']);
                                                                                                            } ?>" name="email" id="loginEmail" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">
                                <a href="#" class="ForgetPwd">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 login-form-2">
                        <h3>Create Account</h3>
                        <form method="POST" action="accCreate.php" onSubmit="return ValidityChecker()">
                            <div class="form-group">
                                <input type="text" name="newEmail" id="accEmail" class="form-control" placeholder="Your Email *" value="<?php if (isset($_SESSION['newEmail'])) {
                                                                                                                                            echo htmlentities($_SESSION['newEmail']);
                                                                                                                                        } ?>" />
                            </div>
                            <div class="form-group">
                                <input type="newPassword" class="form-control" name="password" id="accPassword" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Sign-Up" />
                            </div>
                            <div class="form-group">

                                <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                            </div>
                        </form>
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