<?php session_start();
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

  
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"> <i class="fas fa-bus"></i>Travel Fan Reis</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
						
							<li><a href="contact.php">Contact</a></li>
                			<li><a href="offers.php">Offers</a></li>
                            <li><a href="europe.php">Europe Travel</a></li>
                            <?php

                            include('db_connect.php');

                                $sessionid=session_id();

                                $query="select * from client where session='$sessionid'";
                                $result=mysqli_query($conn,$query);
                                $resa=mysqli_num_rows($result);
                                if ($resa==0)
                                { 
                                    echo" <li><a href='login.php'> <i class='far fa-user-circle'></i>Sign In</a></li>
                                    <li><a href='login.php'> <i class='far fa-user-circle'></i>Sign Up</a></li>";
                                }
                                else 
                                {
                                    $query="select * from client where session='$sessionid' and urole='1'";
                                    $result=mysqli_query($conn,$query);
                                    $count=mysqli_num_rows($result);
                                    if($count==1)
                                    {echo"<li><a href='adminpanel.php'> <i class='fas fa-user-shield'></i>Dashboard</a></li>
                                        <li><a href='logout.php'>Logout <i class='fas fa-sign-out-alt'></i></a></li>";
                                        
                                        
                                        
                                }
                                else{
                                        echo"<li class='active'><a href='cart.php'><i class='fas fa-shopping-cart'></i> (";



                                        
                                        
                                        $sessionid=session_id();
                                        
                                        $query="select * from cart where session='$sessionid' ";
                                        
                                        
                                        $result=mysqli_query($conn,$query);
                                        $nr=mysqli_num_rows($result);
                                        echo $nr;
                                       echo" )</a></li>
                                        <li><a href='logout.php'>Logout <i class='fas fa-sign-out-alt'></i></a></li>";
                                }}
                                ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>
        <h3> Cart for route <i class="fas fa-shopping-cart"></i></h3>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="60%">
	<thead>
		<tr>
			
			<th>Agency</th>
			<th>Date</th>
			<th>Time </th>
            <th>Arrive</th>
			<th>Price</th>
			<th></th>
					
				</button></th>
		</tr>
	</thead>
	<tbody>
        <?php
include('db_connect.php');
$sessionid=session_id();
$result=mysqli_query($conn,"select * from cart,information where cart.session='$sessionid' and cart.routeid=information.iid ");
while($row=mysqli_fetch_array($result)){

    echo"<tr>";
			
			echo"<td>".$row['agency']."</td>
			<td>".$row['date']."</td>
			<td>".$row['istart']."</td>
            <td>".$row['iarrive']."</td>
			<td>".$row['price']."</td>
			<td>";
				echo"
					
				
				<button type='button' class='btn btn-danger btn-xs dt-delete'><a href='deletefromcart.php?ns=".$row['cartid']."'>
					<span class='glyphicon glyphicon-remove' aria-hidden='true'>Delete</span></a>
				</button>
			</td>
		</tr>";
}
?>
		
	</tbody>
</table>
<?php
$result1=mysqli_query($conn,"select * from offerorder where session='$sessionid'");
$nr=mysqli_num_rows($result1);
if($nr==0){

}
else {
echo"
<h3> Cart for round trip offers <i class='fas fa-shopping-cart'></i></h3>
<table id='example' class='table table-striped table-bordered' cellspacing='0' width='60%'>
	<thead>
		<tr>
			
			<th>Agency</th>
			<th>City </th>
            <th>Description</th>
			<th>Price</th>
			<th></th>
					
				
		</tr>
	</thead>
	<tbody>"; 
        
include('db_connect.php');
$sessionid=session_id();
$result1=mysqli_query($conn,"select * from offerorder,offers where offerorder.session='$sessionid' and offers.offerid=offerorder.offerid   ");
while($row=mysqli_fetch_array($result1)){

    echo"<tr>";
			
			echo"<td>".$row['agency']."</td>";
			echo"<td>".$row['details']."</td>";
			echo"<td>".$row['title']."</td>";
			echo"<td>".$row['price']."</td>";
				echo"
					
				<td>
				<button type='button' class='btn btn-danger btn-xs dt-delete'><a href='deletefromcart.php?t=".$row['ooid']."'>
					<span class='glyphicon glyphicon-remove' aria-hidden='true'>Delete</span></a>
				</button>
			</td>
		</tr>";
} echo"</tbody>
</table>";
}
?>
		
	
<?php
      
	  include('db_connect.php');
	  $sessionid=session_id();
$result1=mysqli_query($conn,"select * from europeorder where session='$sessionid'");
$nr=mysqli_num_rows($result1);
if($nr==0){

}
else{
echo"<h3> Cart for Europe Travel <i class='fas fa-shopping-cart'></i></h3>
<table id='example' class='table table-striped table-bordered' cellspacing='0' width='60%'>
	<thead>
		<tr>
			
			<th>Contry</th>
			<th>Agency </th>
            <th>From</th>
			<th>To</th>
			<th>Date</th>
			<th>Time</th>
			<th>Price</th>
				
			<th></th>
		</tr>
	</thead>
	<tbody>";

$result1=mysqli_query($conn,"select * from europeorder,europeinfo where europeorder.session='$sessionid' and europeorder.euroid=europeinfo.eid   ");
while($row=mysqli_fetch_array($result1)){

    echo"<tr>";
			echo"<td>".$row['Shtet']."</td>";
			echo"<td>".$row['eagency']."</td>";
			echo"<td>".$row['efrom']."</td>";
			echo"<td>".$row['eto']."</td>";
			echo"<td>".$row['edate']."</td>";
			echo"<td>".$row['estart']."</td>";
			echo"<td>".$row['eprice']."</td>";
				echo"<td>
				<button type='button' class='btn btn-danger btn-xs dt-delete'><a href='deletefromcart.php?q=".$row['europeorderid']."'>
					<span class='glyphicon glyphicon-remove' aria-hidden='true'>Delete</span></a>
				</button>
				
			</td>
		</tr>";
}
echo"</tbody>
</table>";
}
?>
		
	

                            </body>
                            </html>