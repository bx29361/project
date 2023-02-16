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
							<li ><a href="index.php">Home</a></li>
						
							<li><a href="contact.php">Contact</a></li>
                			<li><a href="offers.php">Offers</a></li>
                            <li class="active"><a href="europe.php">Europe Travel</a></li>
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
 <h1 align="center"><i class="fas fa-globe-europe"></i> Europe Travel <i class="fas fa-map-marked-alt"></i></h1>
   <hr>
   <div class="container">
     <div class="row">

   <div class="col-md-4">
   <?php
   include('db_connect.php');
   echo "<h3>Travel and Enjoy Switzerland <i class='fas fa-map-marked-alt'></i></h3>";
   $query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Switzerland'";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    echo "<ul>";
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    echo "</ul>";
  }
    ?>
    </div>
    <div class="col-md-4">
   <?php
   include('db_connect.php');
   echo "<h3>Travel and Enjoy Germany <i class='fas fa-map-marked-alt'></i></h3>";
   $query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Germany'";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    echo "<ul>";
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    echo "</ul>";
  }
    ?>
    </div>
    <div class="col-md-4">
   <?php
   include('db_connect.php');
   echo "<h3>Travel and Enjoy Austria <i class='fas fa-map-marked-alt'></i></h3>";
   $query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Austria'";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    echo "<ul>";
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    echo "</ul>";
  }
    ?>
    </div>
</div>
</div>
<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top 5 Cities in Switzerland to travel</h3>
							<ul>
							<?php
							$query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Switzerland' limit 4";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    }?>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top 5 Cities in Germany to travel</h3>
							<ul>
							
							<?php
							$query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Germany' limit 5";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    }?>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top 5 Cities in Austria to travel</h3>
							<ul>
							<?php
							$query = "SELECT DISTINCT eto, eid FROM europeinfo where Shtet = 'Austria' limit 4";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
    
    echo "<li><a href='europelist.php?eto=".$row['eid'] ."'>Travel to ".$row['eto'] ."</a></li>";
    }?>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Category</h3>
							<ul>
								<li><a href="europe.php">Europe Travel</a></li>
								<li><a href="offers.php">Offers</a></li>
								<li><a href="show.php">Route Inside Macedonia</a></li>
								
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Company</h3>
							<ul>
								<li>Travel Fan Reis </li>
								<li>Kumanovo</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2021 All Rights Reserved. <br>Made by FAN 
							Group</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
</body>
</html>