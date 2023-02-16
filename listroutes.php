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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
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
					<h1 id="fh5co-logo"><a href="adminpanel.php"><i class="fas fa-user-shield"></i>Dashboard</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
						
							<li><a href="orderlist.php">Order List</a></li>
							<li><a href="orderoffers.php">Offers Order List</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
        <section class="posts ">
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12 d-none d-md-block">
                <div class="card">
                    <div class="card-header">
                    <h3>All Routes <i class="fas fa-route"></i></h3>
                    </div><?php  
                    include('db_connect.php');
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
    echo "<td><a href=additem.php";
    echo "?iid=".$row['iid']."</tr>";


   


 }
 echo"</table>"; ?>
                </div>
            </div>
    </body>
</html>