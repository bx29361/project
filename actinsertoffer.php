<?php
session_start();
include('db_connect.php');
$agency=$_POST['agency_name'];
$title=$_POST['title'];
$desc=$_POST['description'];
$price=$_POST['price'];
$image=$_POST['image'];
$imagename=$_POST['jpg'];
$query="insert into offers values(NULL,0,'$agency','$title','$desc',$price,'$image','$imagename')";
mysqli_query($conn,$query);
header("Location:adminpanel.php");


?>

