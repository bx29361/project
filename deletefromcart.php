<?php
session_start();
$session=session_id();
include('db_connect.php');
if (isset($_GET['ns']))
{
    $n=$_GET['ns'];
    $result=mysqli_query($conn,"delete from cart where session='$session' and cartid=$n");
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if (isset($_GET['t']))
{
    $n=$_GET['t'];
    $result=mysqli_query($conn,"delete from offerorder where session='$session' and ooid=$n");
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if (isset($_GET['q']))
{
    $n=$_GET['q'];
    $result=mysqli_query($conn,"delete from europeorder where session='$session' and europeorderid=$n");
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>