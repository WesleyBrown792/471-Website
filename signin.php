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

<body class="h-100">
    <div class="h-100">
        <?php
        include "components/nav.php";
        ?>

        <div class="container-xl p-0 signin-full-container">

            <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Login</h3>
                        <form method="POST" action="login.php" onSubmit="return Empty()">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email *" value="<?php if(isset($_SESSION['email'])){echo htmlentities($_SESSION['email']);}?>" name="email" id="loginEmail" />
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
                        <form method="POST" action="accCreate.php" onSubmit="return AccountValidation()">
                            <div class="form-group">
                                <input type="text" name="email" id="accEmail" class="form-control" placeholder="Your Email *" value="<?php if(isset($_SESSION['email'])){echo htmlentities($_SESSION['email']);}?>" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="accPassword" placeholder="Your Password *" value="" />
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
</body>

</html>