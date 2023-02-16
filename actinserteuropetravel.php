<?php
session_start();
include('db_connect.php');
$agency=$_POST['agency'];
$country=$_POST['shtet'];
$from=$_POST['from'];
$to=$_POST['to'];
$edate=$_POST['edate'];
$estart=$_POST['estart'];
$price=$_POST['price'];
$result=mysqli_query($conn,"insert into europeinfo values(NULL,'$country','$agency','$from','$to','$edate','$estart','$price',20)");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>