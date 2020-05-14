<?php

include("user-info.php");
ob_start();
session_start();
$_SESSION["login"] = "false";
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $_username && $password == $_pass) {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;
    header("Location:home.php");
} else {
    header("Location:login.php");
}

ob_end_flush();
