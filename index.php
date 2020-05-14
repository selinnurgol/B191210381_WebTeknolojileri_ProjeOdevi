<?php
session_start();
if ($_SESSION["login"] == true) {
    header("Location:home.php");
} else {
    header("Location:login.php");
}
