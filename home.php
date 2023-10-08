<?php
    session_start();
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
    <?php
        echo $_SESSION["username"];
    ?>
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
            }
        }
        ?>
        </tr>
    </table>
</body>
</html>