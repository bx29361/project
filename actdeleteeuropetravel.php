<?php
include('db_connect.php');
$a=$_POST['sel'];
mysqli_query($conn,"DELETE FROM europeinfo WHERE eid=$a");


header("Location:adminpanel.php");
?>
