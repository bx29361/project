<?php
include('db_connect.php');
$a=$_POST['sel'];
mysqli_query($conn,"DELETE FROM information WHERE iid=$a");


header("Location:adminpanel.php");
?>