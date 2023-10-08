<?php
session_start();
include "dbConnection.php";
$name = $_POST["name"];
$description = $_POST["description"];
$owner = $_SESSION["username"];

$code = "INSERT INTO `tasks` (`name`, `description`, `owner`) VALUES ('$name', '$description', '$owner')";
$add = mysqli_query($sql, $code);
header("Location: home.php");
?>