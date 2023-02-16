<?php
include('db_connect.php');
$email=$_POST['email'];
$pass=$_POST['password'];
$query="select * from client where email='$email'and password='$pass'";
$result=mysqli_query($conn,$query);
$nr=mysqli_num_rows($result);

if ($nr=='0')
{
    header("refresh:1;url=login.php");
}

while($row=mysqli_fetch_array($result))
{
    session_id($row['session']);
    session_start();
    //$query="UPDATE users SET last_login=(NOW()) WHERE email='$email'";
    //mysqli_query($conn,$query);
    $_SESSION['user']=$email;
    header("refresh:1;url=index.php");
}
?>