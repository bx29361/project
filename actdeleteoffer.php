<?php
include('db_connect.php');
$a=$_POST['sel'];
mysqli_query($conn,"DELETE FROM offers WHERE offerid=$a");


header("Location:adminpanel.php");
?>
