<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
unset($_SESSION['USERNAME']);

session_destroy();
header("location:./login.php ");

?>