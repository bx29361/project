<?php session_start();
include('db_connect.php');

// $sessionid=session_id();

// $query="select * from clients where urole='1' and session='$sessionid'";
// $result=mysqli_query($conn,$query);
// $res=mysqli_num_rows($result);
// if ($res==0)
// {
//     header("Location: index.php");
// }

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
                            <li><a href="contactsfromclients.php">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
        
<!--add action section-->
<section class="addsection bg-light py-3">
    <div class="container text-white ">
        <div class="row">
        <div class="col-md-3 mb-2"> 
                <a href='addoffer.php' class="btn btn-primary btn-block p-2"  >
                    <i class="fas fa-plus"></i>  Add Offer
                </a>
            </div>
                <div  class="col-md-3 mb-2"> 
                <a  href='addroute.php' class="btn btn-success btn-block p-2" >
                    <i class="fas fa-plus"></i>  Add Route
                </a>
            </div>
            <div class="col-md-3 mb-2"> 
                <a  href='deleteoffer.php' class="btn btn-warning btn-block p-2" >
                    <i class="fas fa-minus"></i>  Delete Offer
                </a>
            </div>
            
            <div class="col-md-3 mb-2"> 
                <a href='deleteroute.php' class="btn btn-dark btn-block p-2" >
                    <i class="fas fa-minus"></i>  Delete Route                </a>
            </div> 
            
        </div>
        <div class="row">
        <div class="col-md-3 mb-2"> 
                <a href='addeuropetravel.php' class="btn bg-light text-dark btn-block p-2"  >
                    <i class="fas fa-plus"></i>  Add Europe Travel
                </a>
            </div>
            <div class="col-md-3 mb-2"> 
                <a href='deleteeuropetravel.php' class="btn bg-warning text-dark btn-block p-2"  >
                    <i class="fas fa-minus"></i>  Delete Europe Travel
                </a>
            </div>
            <div class="col-md-3 mb-2"> 
                <a href='listroutes.php' class="btn bg-white text-dark btn-block p-2"  >
                     <i class="far fa-list-alt"></i></i>  List All Routes
                </a>
            </div>
            <div class="col-md-3 mb-2"> 
                <a href='listoffers.php' class="btn bg-info btn-block p-2 text-white"  >
                <i class="far fa-list-alt"></i> List All Offers
                </a>
            </div>
</div>
    </div>
</section>

<!---posts-->
<section class="posts ">
    <div class="container my-4">
        <div class="row">
            <div class="col-md-9 d-none d-md-block">
                <div class="card">
                    <div class="card-header">
                    <h3> Routes <i class="fas fa-route"></i></h3>
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
            <div class="col-md-3">
                <div class="card bg-primary text-center text-white">
                    <div class="card-body">
                        <h2>Offers</h2>
                        <h3 class="display-4"><i class="fas fa-dolly-flatbed"></i>  
                        <?php
                        include("db_connect.php");
                                                                                $query="SELECT * FROM offers";
                                                                                $result=mysqli_query($conn,$query);
                                                                                echo mysqli_num_rows ( $result );
                                                                               
                                                                                ?>
                        </h3>
                        <a href="products.php" class="btn btn-outline-light mt-1">View</a>

                    </div>
                </div>
                <div class="card bg-success text-center text-white my-2">
                    <div class="card-body">
                        <h2>Route Orders</h2>
                        <h3 class="display-4"><i class="fas fa-folder "></i> 
                        <?php
                        include("db_connect.php");
                                                                                $query="SELECT * FROM cart";
                                                                                $result=mysqli_query($conn,$query);
                                                                                echo mysqli_num_rows ( $result );
                                                                               
                                                                                ?>
                        </h3>
                        <a href="category.php" class="btn btn-outline-light mt-1">View</a>

                    </div>
                </div>
                <div class="card bg-warning text-center text-white">
                    <div class="card-body">
                        <h2>Users</h2>
                        <h3 class="display-4"><i class="fas fa-users"></i>
                        <?php
                        include("db_connect.php");
                                                                                $query="SELECT * FROM client";
                                                                                $result=mysqli_query($conn,$query);
                                                                                echo mysqli_num_rows ( $result );
                                                                               
                                                                                ?>
                         </h3>
                        <a href="users.php" class="btn btn-outline-light mt-1">View</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    
    //WYSIWYG editor for textarea
                        CKEDITOR.replace( 'editor1' );
                
  </script>

  
                </body>
                </html>