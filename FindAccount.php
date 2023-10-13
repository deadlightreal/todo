<?php 
    include "dbConnection.php";
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $Code = "SELECT * FROM `users` WHERE `username` LIKE '$username'";
    $find = mysqli_query($sql, $Code);

    while ($row = mysqli_fetch_assoc($find)) {
        if ($password == $row["password"]) {
            header("Location: boards.php");
            $_SESSION["username"] = $username;
        }
        else {
            header("Location: login.php");
        }
    }
?>