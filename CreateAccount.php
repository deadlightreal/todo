<?php
    include "dbConnection.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $code = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $mysql = mysqli_query($sql, $code);
?>