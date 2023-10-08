<?php
session_start();
    include "dbConnection.php";
    $id = $_POST["task-id"];
    $username = $_SESSION["username"];

    $code = "DELETE FROM `tasks` WHERE `id` LIKE '$id' AND `owner` LIKE '$username'";
    $delete = mysqli_query($sql, $code);
    header("Location: home.php")
?>