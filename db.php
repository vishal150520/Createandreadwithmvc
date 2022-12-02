<?php
$sname="localhost";
$uname="root";
$db="shoppingcart";
$pss="Admin@123";
$conn=new mysqli($sname,$uname,$pss,$db);
if($conn->connect_error)die("kjk");
?>