<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>STEPSHOE | About Us</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
            <div class="top_right">
            <ul>
                <li class="top_link"><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
			<div class="top_left">
				<ul>
                    <li class="top_link"><a href="#"><?php echo $login_session; ?></a></li>|
					<li class="top_link"><a href="login.php">Login</a></li>|
                    <?php
                    if(!empty($login_session)){
                        echo "<li class='top_link'><a href='myaccount.php'>My Account</a></li>";
                    }
                    else{
                       echo "<li class='top_link'><a href='login.php'>My Account</a></li>"; 
                    }
                    ?>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">			
				<div class="logo">
					<a href="index.php"><h1>STEPSHOE</h1></a>
				</div>
			 <!---->
		 
 <div class="top-nav">
				<ul class="memenu skyblue">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="product.php">Shoes</a></li>
					<li class="grid"><a href="aboutus.php">About Us</a></li>
					<li class="grid"><a href="contact.php">Contact Us</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			 <div class="cart box_1">
				 <a href="">
					<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
				</a>
				
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<div class="contact">
	  <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Confirmation</li>
		 </ol>
         <div class="jumbotron text-center">
            <h1 class="display-3">Thank You!</h1>
            <p class="lead"><strong>Your order has been registered!</strong>We will start working on it as soon as possible</p>
            <hr>
            <p>
                Having trouble? <a href="contact.php">Contact us</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary" href="index.php" role="button">Continue to homepage</a>
            </p>
        </div>
	  </div>
 </div>
<!---->
<div class="shoping">
	 <div class="container">
		 <div class="shpng-grids">
			 <div class="col-md-4 shpng-grid">
				 <h3>Order and Pay</h3>
				 <p>Order and Pay online</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>Delivery</h3>
				 <p>Delivery Anywhere in Mauritius</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>COD</h3>
				 <p>Cash On Delivery</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="aboutus.php">Who We Are</a></li>
					 <li><a href="contact.php">Contact Us</a></li>
					 <li><a href="#">Location</a></li>
					 <li><a href="#">Team</a></li>				 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Account</h4>
				 <ul>
					 <li><a href="myaccount.php">Your Account</a></li>				 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="product.php">Shoes</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2023 STEPSHOE. All Rights Reserved to Team Bosco</p>
		 </div>
</div>		 
</body>
</html>