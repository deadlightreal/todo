<?php
session_start();
include "dbConnection.php";
$task = $_POST["task"];
$boardid = $_POST["boardid"];

$code = "INSERT INTO `tasks` (`task`, `boardid`) VALUES ('$task', '$boardid')";
$add = mysqli_query($sql, $code);
header("Location: board.php");
?>