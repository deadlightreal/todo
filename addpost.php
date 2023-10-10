<?php
session_start();
include "dbConnection.php";
$task = $_POST["task"];
$owner = $_SESSION["username"];

$code = "INSERT INTO `tasks` (`task`, `owner`) VALUES ('$task', '$owner')";
$add = mysqli_query($sql, $code);
header("Location: home.php");
?>