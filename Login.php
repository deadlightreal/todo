<?php
    session_start();
    if (isset($_SESSION["username"])) {
        header("Location: home.php");
    }
    else {

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="TopMenuu">
            <form action="Register.php">
                <input type="submit" class="TopRegister" value="Register">
            </form>
            <form action="Login.php">
                <input type="submit" class="TopLogin" value="Login">
            </form>
        </div>
        <form action="FindAccount.php" method="POST">
            <input type="text" name="username" id="usernameL" placeholder="Enter username" required>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
            <input type="submit" value="Login" id="submit">
        </form>
        <form action="">
            <input type="submit" class="Forgot" value="Forgot password?">
        </form>
    </div>
</body>
</html>