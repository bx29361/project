<?php
session_start();
include('db_connect.php');
if (isset($_GET['iid'])){
$route=$_GET['iid'];
$sessionid=session_id();
$result1=mysqli_query($conn,"select * from information where iid=$route");
$res=mysqli_fetch_array($result1);
$price=$res['price'];
echo $price;
$result=mysqli_query($conn,"INSERT INTO cart VALUES ('NULL','$route',NOW(),'$price','$sessionid')");
}
if (isset($_GET['ses']))
{
    $a=$_GET['ses'];
    
$session=session_id();
    $result=mysqli_query($conn,"INSERT INTO offerorder  VALUES ('NULL',$a,'NULL','NULL','NULL',NOW(),'12:54:51','NULL','$session')");
}
if(isset($_GET['eid']))
{
    $a=$_GET['eid'];
    $qq=mysqli_query($conn,"Select * from europeinfo where eid=$a");
    $res=mysqli_fetch_array($qq);
    $nr=$res['Seats'];
    $nr-=1;
    $qq=mysqli_query($conn,"UPDATE europeinfo SET Seats=$nr WHERE eid=$a");
    $session=session_id();
    $result=mysqli_query($conn,"INSERT INTO europeorder  VALUES ('NULL',$a,NOW(),'$session')");



}

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>