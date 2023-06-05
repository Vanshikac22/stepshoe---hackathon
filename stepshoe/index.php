<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>STEPSHOE</title>
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
<!-- link to css file of both menu and test -->

<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>



<!-- $(document).ready(function() is a j query method that waits for the documents to be fully loaded and ready before executing the code inside the function - ensures code does not run until the page has finished loading and all the elements of the page are properly displayed  -->
<!-- $(".memenu").memenu() is the main function call that activates the memenu plugin on the elements with class "memenu." -->
<!-- $(".memenu") jquery selector that selects all the elements with class = ".memenu()" whereby this method contains the actual memenu plugin that transform the elemnts into multi-level, responsive dropdown menus -->

<script>$(document).ready(function(){$(".memenu").memenu();});</script>	



<!-- /start menu -->
<!-- at the top completely (the blue header) -->

</head>
<body> 
<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
            	<div class="top_right">
				<ul>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>

					<!-- outputs value of $loginsession where the echo prints the value of the variable to the browser -->
					
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



			 <!--NAVIGATION BAR- unordered list that displays home, shoes, about us, contact us-->
		 
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



<!--Banner section with website description-->

<div class="banner">
	 <div class="container">
	 </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="col-md-3 welcome-left">
			 <h2>Welcome to STEPSHOE</h2>
		 </div>
		 <div class="col-md-9 welcome-right">
			 <h3>Choose STEPSHOE for shoes delivered in Mauritius</h3>
			 <p>EXPERIENCE UNPARALLELED COMFORT AND STYLE WITH THE ADIDAS SHOES, FEATURING BOOST TECHNOLOGY FOR MAXIMUM ENERGY RETURN AND A SLEEK DESIGN FOR A MODERN LOOK.</p>
		 </div>
	 </div>
</div>




<!--php script of index.php(backend)-->

<?php

// variable $ProdCol holds reference for access of Product collection from the $db Mongodb database 
// variable $prodlist holds reference for the "find" method whereby the $prodCol  retrieved all documents in the product collection but with the limit of max 4 products to be displayed below featured products 
//  first argument is an empty array which represents a query filter. In this case, no filter is applied and all documents in product collection is returned 
// the second argument is an array with the find method with the limit option set to four

$prodCol = $db->Product;
$prodlist = $prodCol->find(
	[],[ 'limit' => 4]
);
?>


<!--Featured Shoes section-->
<div class="featured">
	 <div class="container">
		 <h3>Featured Shoes</h3>
		 <div class="feature-grids">


		 <!-- displays details of list of products that are retrieved from mongodb database -->
		 <!-- loops through the $prodlist -->
		 <!-- the "foreach" loop is used to iterate over each product in the $prodlist -->
		 <!-- the current product will be stored in the $prod variable -->
		 <!-- displays product detailos through the product.php where only the anme and price are displayed -->

		 <?php foreach($prodlist as $prod){ ?>
			 <div class="col-md-3 feature-grid jewel">
				 <a href="product.php"><img src="<?php echo $prod['image'];?>" alt=""/>	
					 <div class="arrival-info">
						 <h4><?php echo $prod['name'];?></h4>
						 <p>Rs <?php echo $prod['price'];?></p>
					 </div></a>
		 	  </div>
		 <?php } ?>

		 </div>
	 </div>
</div>



<!-- backend -->
<!--displays shoes on motion-->
<!-- $db instance of mongodb class connects to the Product database and its reference is stored in the $prodCol variable -->
<!-- "find" method is called on the $pCol collection to retrieve the products list. IKt accepts two parameters  -->
<!-- the first parameter [] is used to specify an empty filter meaning all documents in the collection will be returned -->
<!-- the second parameter  [ 'limit' => 4, 'sort' => ['id' => -1]]' is an options array that specifies the limit on the number of documents to be returned and the sort order of the documents -->
<!-- the limit options specifies a limit of 4 documents and the sort options returns document in the descending order based on the id property -->

<?php
$pCol = $db->Product;
$plist = $pCol->find(
	[],[ 'limit' => 4, 'sort' => ['id' => -1]]
);
?>


<!---->
<div class="arrivals">
	 <div class="container">	
		 <h3>New Arrivals</h3>
		 <div class="arrival-grids">			 
			 <ul id="flexiselDemo1">

			<!--  -->

			 <?php foreach($plist as $p){ ?>
				 <li>
					 <a href="product.php"><img src="<?php echo $p['image'];?>" alt=""/>	
					 <div class="arrival-info">
						 <h4><?php echo $p['name'];?></h4>
						 <p>Rs <?php echo $p['price'];?></p>
					 </div></a>
				 </li>
				 <?php } ?>
				</ul>


				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		  </div>
	 </div>
</div> <!--displays new added items in database -->
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
                         <?php
                    if(!empty($login_session)){
                        echo "<li><a href='myaccount.php'>Your Account</a></li>";
                    }
                    else{
                       echo "<li><a href='login.php'>Your Account</a></li>	"; 
                    }
                    ?>		 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">Shoes</a></li>				 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2023 STEPSHOE. All Rights Reserved To Team Bosco</p>
		 </div>
</div>		 
</body>
</html>
