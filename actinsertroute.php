<?php
session_start();
include('db_connect.php');
$agency=$_POST['agency_name'];
$from=$_POST['from'];
$to=$_POST['to'];
$price=$_POST['price'];
$date=$_POST['startdate'];
$starttime=$_POST['sappt-time'];
$endtime=$_POST['eappt-time'];
$query="insert into information values(NULL,'$agency','$from','$to',$date,'$starttime','$endtime',$price)";
mysqli_query($conn,$query);
header("Location:adminpanel.php");


?>