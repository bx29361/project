<?php
session_start();
include('db_connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$mes=$_POST['mesazh'];
$result=mysqli_query($conn,"insert into contact values('NULL','$name','$email','$mes')");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>