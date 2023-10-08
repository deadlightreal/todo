<?php
    session_start();
    if (isset($_SESSION["username"])) {

    }
    else {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task</title>
</head>
<body>
    <form action="addpost.php" method="POST">
        <input type="text" name="name" id="name" required>
        <input type="text" name="description" id="description" required>
        <input type="submit" value="Add Task">
    </form>
</body>
</html>