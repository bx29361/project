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
                                        echo"<li><a href='cart.php'><i class='fas fa-shopping-cart'></i> (";



                                        
                                        
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
        <?php
        include('db_connect.php');
if (isset($_GET['eto'])){


    $to=$_GET['eto'];
    $query = "SELECT * FROM europeinfo where  eid = '$to' ";
    
    $result = mysqli_query($conn,$query);
   
    echo "<br>";
    
   echo "<table class='table table-hover' >";
    
    echo "<tr>";
    echo"<th>Contry</th>
    <th>Agency </th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Time</th>
    <th>Price</th>";
    
   
    
    echo "<th>Order</th>
    <th>Free Seats</th>";
    echo "</tr>";
    echo "<tbody>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo"<td>".$row['Shtet']."</td>";
			echo"<td>".$row['eagency']."</td>";
			echo"<td>".$row['efrom']."</td>";
			echo"<td>".$row['eto']."</td>";
			echo"<td>".$row['edate']."</td>";
			echo"<td>".$row['estart']."</td>";
			echo"<td>".$row['eprice']."</td>";
    echo "<td><a href=addtocart.php";
    echo "?eid=".$row['eid'];
    echo ">Reserve</a></td>
    <td>".$row['Seats']."</td>
    </tr>";

   
}
echo"</tbody></table>";

 }
 else
 {
    $query = "SELECT * FROM information  ";
    
    $result = mysqli_query($conn,$query);
   
    echo "<br>";
    
   echo "<table class='table table-hover' >";
    
    echo "<tr>";
    echo "<th>Agency</th>";
    echo "<th>From</th>";
    echo "<th>To</th>";
    echo "<th>Date</th>";
    echo "<th>Start</th>";
    echo "<th>Arrive</th>";
    echo "<th>Price</th>";
    echo "<th>Order</th>";
    echo"<th>Free Seats</th>";
    echo "</tr>";
    echo "<tbody>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" .$row['agency'] ."</td>";
    echo "<td>" .$row['ifrom'] ."</td>";
    echo "<td>" .$row['ito'] ."</td>";
    echo "<td>" .$row['date'] ."</td>";
    echo "<td>" .$row['istart'] ."</td>";
    echo "<td>" .$row['iarrive'] ."</td>";
    echo "<td>" .$row['price'] ."</td>";
    echo "<td><a href=addtocart.php";
    echo "?iid=".$row['iid'];
    echo ">Reserve</a></td>
    <td>".$row['Seats']."</td>
    </tr>";
   
}

 } ?>
                            </div>
                            </div>
                            </body>
                            </html>