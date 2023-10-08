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
    <form action="FindAccount.php" class="main" method="POST">
        <input type="text" name="username" id="username" placeholder="Enter username" required>
        <input type="password" name="password" id="password" placeholder="Enter password" required>
        <input type="submit" value="Login" id="submit">
    </form>
</body>
</html>