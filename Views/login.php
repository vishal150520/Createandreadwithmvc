<?php
require_once '../Models/TaskService.php';
$taskService = new TaskService();
session_start();
$errmsg = [];
$errflag = false;

$username = $_POST['login'];
$password = $_POST['password'];


$row = $taskService->getUser($username, $password);
if ($row) {

    $_SESSION['USERNAME'] = $username;
 
    header("location:./task-form.php");
    exit();
} else {
    //session_start();
    $_SESSION['ERRMSG'] = "Invalid username or password";
    session_write_close();
    header("location: ../Views/login-form.php");
    exit();
}


