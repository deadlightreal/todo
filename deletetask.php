<?php
session_start();
    include "dbConnection.php";
    $id = $_POST["taskid"];
    $username = $_SESSION["username"];

    $code = "DELETE FROM `tasks` WHERE `id` LIKE '$id'";
    $delete = mysqli_query($sql, $code);
    header("Location: board.php")
?>