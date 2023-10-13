<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
</head>
<body>
    <form action="newTask.php" method="POST">
        <?php
        echo '<input type="hidden" name="boardid" value="' . $_POST["boardid"] . '">';
        ?>
        <input type="submit" value="Add new task">
    </form>
    <?php 
        session_start();
        include "dbConnection.php";
        $boardid = $_POST["boardid"];
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