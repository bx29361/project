<?php

	include("db_connect.php");
			$v=$_GET['contactid'];
			$query="delete  from contact where contactid ='$v'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:adminpanel.php");

?>