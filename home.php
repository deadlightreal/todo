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
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div  class="menu">
        <form action="newTask.php">
            <input class="menuBTN" type="submit" value="New Task">
        </form>
        <form action="logout.php">
            <input class="menuBTN" type="submit" value="logout">
        </form>
    </div>
    <br>
    <table>
        <tr>
        <?php
        $username = $_SESSION["username"];
        include "dbConnection.php";
        $data = "SELECT * FROM `tasks` WHERE `owner` LIKE '$username'";
        $result = $sql->query($data);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>" . $row["name"] . "</tr> <br>";
                echo "<tr>" . $row["description"] . "</tr>";
                echo '<form action="deletetask.php" method="POST">
                        <input type="hidden" name="task-id" value="' . $row["id"] . '">
                        <input type="submit" value="Delete">
                      </form>';
            }
        }
        ?>
        </tr>
    </table>
    <script src="https://kit.fontawesome.com/b38bc980a4.js" crossorigin="anonymous"></script>
</body>
</html>