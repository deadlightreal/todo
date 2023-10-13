<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
</head>
<body>
    <form action="boards.php">
        <input type="submit" value="Go to boards">
    </form>
    <form action="newTask.php" method="POST">
        <?php
        session_start();
        if (isset($_POST["boardid"])) {
            $boardid = $_POST["boardid"];
        }
        else if (isset($_SESSION["boardid"])) {
            $boardid = $_SESSION["boardid"];
        }
        else {
            header("Location: boards.php");
        }
        echo '<input type="hidden" name="boardid" value="' . $boardid . '">';
        ?>
        <input type="submit" value="Add new task">
    </form>
    <?php 
        include "dbConnection.php";
        if (isset($_POST["boardid"])) {
            $boardid = $_POST["boardid"];
            $_SESSION["boardid"] = $_POST["boardid"];
        }
        else if (isset($_SESSION["boardid"])) {
            $boardid = $_SESSION["boardid"];
        }
        else {
            header("Location: boards.php");
        }
        $code = "SELECT * FROM `tasks` WHERE (`boardid`) LIKE ('$boardid')";
        $result = mysqli_query($sql, $code);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div>' . $row["task"] . '</div>';
            }
        }
    ?>
</body>
</html>