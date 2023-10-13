<?php 
    session_start();
    include "dbConnection.php";
    $username = $_SESSION["username"];
    $name = $_POST["boardName"];
    $invited = $_POST["boardInvited"];

    $code = "INSERT INTO `boards` (`name`, `owner`, `invited`) VALUES ('$name', '$username', '$invited')";
    $createBoard = mysqli_query($sql, $code);
    header("Location: boards.php");
?>