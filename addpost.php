<?php
include "dbConnection.php";
$name = $_POST["name"];
$description = $_POST["description"];

$code = "INSERT INTO `tasks` (`name`, `description`) VALUES ('$name', '$description')";
$add = mysqli_query($sql, $code);
?>