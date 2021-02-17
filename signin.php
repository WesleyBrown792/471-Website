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
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="login.php" onSubmit="return Empty()">
        <div><label for="user">Email: </label><input type="text" name="email" id="loginEmail" value="<?php if(isset($_SESSION['email'])){echo htmlentities($_SESSION['email']);}?>"/></div>
        <div><label for="password">Password: </label><input type="password" name="password" id="loginPassword"/></div>
        <input type="submit" value="Submit">
    </form>
    <h1>Create Account</h1>
    <form method="POST" action= "accCreate.php" onSubmit="return AccountValidation()">
        <div><label for="user">Email: </label><input type="text" name="email" id="accEmail" value="<?php if(isset($_SESSION['email'])){echo htmlentities($_SESSION['email']);}?>"/></div>
        <div><label for="password">Password: </label><input type="password" name="password" id="accPassword"/></div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
