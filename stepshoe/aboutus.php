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



<!-- the event listener will run when the load event is fired; occurs when webpage has finished loading  -->
<!-- after that the function will run -->
<!-- the setTimer will run the hideURLbar function after 0 milliseconds implying the function will run as soon as possible -->
<!-- the hideURL function uses the scrollTo method on the window to scroll the position (0,1) - this provides full-screen experience for users  -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<!-- start menu -->

<script src="js/simpleCart.min.js"> </script>




<!-- start menu -->

<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>


<!-- $(document).ready(function() is a j query method that waits for the documents to be fully loaded and ready before executing the code inside the function - ensures code does not run until the page has finished loading and all the elements of the page are properly displayed  -->
<!-- $(".memenu").memenu() is the main function call that activates the memenu plugin on the elements with class "memenu." -->
<!-- $(".memenu") jquery selector that selects all the elements with class = ".memenu()" whereby this method contains the actual memenu plugin that transform the elemnts into multi-level, responsive dropdown menus -->

<script>$(document).ready(function(){$(".memenu").memenu();});</script>	



<!-- /start menu -->

</head>
<body> 
<!--header (blue nav bar)-->	
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


					
					<!-- $login_session variable is checked using the empty function -->
					<!-- checks if $login_session is not empty. If its true it menas user is logged in -->
					<!-- if condition is false, it means variable $loginsession is empty -->
				
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



			 <!-- MAIN NAVIAGTION BAR FOR OPTIONS -->
		 
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
		  <li class="active">About Us</li>
		 </ol>



			<!---start-contact---->

			<h3>About Us</h3>
				</br>
			<p>Everything we do is rooted in sport. Sport plays an increasingly important role in more and more people’s lives, on and off the field of play. It is central to every culture and society and is core to our health and happiness.</p> 
				</br>
			<p>Our purpose, ‘through sport, we have the power to change lives’, guides the way we run our company, how we work with our partners, how we create our products, and how we engage with our consumers. We will always strive to expand the limits of human possibilities, to include and unite people in sport, and to create a more sustainable world.  </p>
				</br>
			<p>At STEPSHOE, we are rebellious optimists driven by action, with a desire to shape a better future together. We see the world of sport and culture with possibility where others only see the impossible. ‘Impossible is Nothing’ is not a tagline for us. By being optimistic and knowing the power of sport, we see endless possibilities to apply this power and push all people forward with action.</p>
	  </div>
 </div>



<!--Services Provided-->

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



<!--FOOTER-->

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



<!--Rights-->

 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2023 STEPSHOE. All Rights Reserved To Team Bosco</p>
		 </div>
</div>		 
</body>
</html>