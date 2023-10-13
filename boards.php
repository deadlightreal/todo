<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boards</title>
</head>
<body>
    <form action="createBoard.php">
        <input type="submit" value="Create New Board">
    </form>
    <?php
        session_start();
        include "dbConnection.php";
        $username = $_SESSION["username"];
        $code = "SELECT * FROM `boards` WHERE (`owner`) LIKE ('$username') OR (`invited`) LIKE ('$username')";
        $result = mysqli_query($sql, $code);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div>';
                echo "<div>" . $row["name"] . "</div>";
                echo '<form action="board.php" method="POST">';

                echo '<input type="submit" value="Connect">';
                echo '<input type="hidden" name="boardid" value="' . $row["id"] . '">';


                echo '</form>';
                echo '</div>';
            }
        }
    ?>
</body>
</html>