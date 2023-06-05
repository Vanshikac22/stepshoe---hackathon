<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>STEPSHOE | Products</title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body> 
<!--header-->	
<!--PHP-->
<?php
$prodCol = $db->Product;
$prodlist = $prodCol->find(
	[]
);
?>
<!---->
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
<!---->
<?php
if (isset($_POST['add']))
{
// Define $id and $quantity
$id=$_POST['id'];
$quantity=$_POST['quantity'];
header("Location: checkout.php?id=$id&qty=$quantity");
}
?>
<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>Our Products</h2>			
		 <div class="col-md-12 product-model-sec">
		 <?php foreach($prodlist as $prod){ ?>
			<form action="" method="POST">
					 <div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo $prod['image'];?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							</h4>
							</div>
						</div>
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $prod['name'];?></h4>
								<p><?php echo $prod['description'];?></p>
								<span class="item_price">Rs <?php echo $prod['price'];?></span>								
								<input type="text" class="item_quantity" value="1" name="quantity" />
								<input type="text" value="<?php echo $prod['id'];?>" name="id" style="display:none"/>
								<input type="submit" class="item_add items" value="ADD TO CART" name="add">
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
		 	</form>
					<?php } ?>
			</div>			 
	      </div>
		</div>
</div>
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
