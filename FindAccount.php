<?php 
    include "dbConnection.php";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $Code = "SELECT * FROM `users` WHERE `username` LIKE '$username'";
    $find = mysqli_query($sql, $Code);

    while ($row = mysqli_fetch_assoc($find)) {
        if ($password == $row["password"]) {
            header("Location: home.php");
        }
        else {
            header("Location: login.php");
        }
    }
?>