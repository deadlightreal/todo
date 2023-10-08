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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="CreateAccount.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Enter username" required>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
            <input type="submit" value="Register" id="submit">
        </form>
        <form action="Login.php">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>