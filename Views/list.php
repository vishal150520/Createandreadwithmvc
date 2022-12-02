<?php include ('head.php');?>

<div class="panel-heading panel-content">
    <a href="task-form.php">Add new task</a>
</div>
<?PHP echo "Welcome - ".$_SESSION['USERNAME'];?><br>
<a href="logout.php">LogOut</a>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Models/TaskService.php';
$taskService = new TaskService();
$o=$taskService->getAllTasks();


// OUTPUT DATA OF EACH ROW
  echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">email</font> </td> 
          <td> <font face="Arial">task</font> </td> 
          <td> <font face="Arial">done</font> </td> 
      
      </tr>';
foreach ($o as $row) 
{
    echo '<tr> 
    <td>'.$row["id"].'</td> 
    <td>'.$row["name"].'</td> 
    <td>'.$row["email"].'</td> 
    <td>'.$row['task'].'</td> 
    <td>'.$row['done'].'</td> 
    </tr>';
    
}
?>

<?php include ('foot.php');?>

