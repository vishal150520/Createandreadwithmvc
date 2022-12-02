<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Models/TaskService.php';
$taskService = new TaskService();
session_start();
$errmsg = [];
$errflag = false;


if(isset($_SESSION['USERNAME']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $task = $_POST['task'];
    $taskService->createNewTask($name,$email,$task,$done=1);
    if($taskService)
    {
        header("location: ../Views/list.php");
    }
}
else
{
    header("location: ../Views/login.php");
}


?>