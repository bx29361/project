<?php
session_start();
session_regenerate_id();
include("db_connect.php");
$email=$_POST['email'];
$user=$_POST['username'];
$pas=$_POST['password'];
$firstname=$_POST['f'];
$lastname=$_POST['lastname'];
$num=$_POST['number'];
$session=session_id();

$query="insert into client values(NULL,'$user','$firstname','$lastname','$pas','$num','$email','$session',2)";
mysqli_query($conn,$query);
header("Location:index.php");
?>