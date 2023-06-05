<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Flower Shop | Cart</title>
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
					<a href="index.php"><h1>Online Flower Shop</h1></a>
				</div>
			 <!---->
		 
			 <div class="top-nav">
				<ul class="memenu skyblue">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="product.php">Flowers</a></li>
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
$error='';
$prodid = $_GET['id'];
$qty = $_GET['qty'];
$prodCol = $db->Product;
$doc = $prodCol->findOne(
	['id' => intval($prodid)]
);

if (isset($_POST['submit'])){

	$totalprice = $doc['price'] * $qty;

	$orderCol = $db->Order;
	$insert = $orderCol->insertOne(
		[
			'id' => mt_rand(),
			'userid' => $row['id'],
			'productid' => intval($prodid),
			'quantity' => $qty,
			'totalprice' => $totalprice,
			'date' => date("d/m/Y")
		]
	);

	$res = $insert->getInsertedId();
	if(empty($res)){
		$error="<div class='alert alert-danger' role='alert'>
	  Error in registering order. Please Try Again !</div>";
	}
	else{
		header("Location: confirmation.php");
	}
}
?>
<!---->
<div class="checkout">	 
	 <div class="container">	
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>
		 <div class="col-md-9 product-price1">
			 <div class="check-out">			
				 <div class=" cart-items">
					 <h3>Order Details</h3>
					 <table class="table table-borderless">
						<tbody>
						<tr>
							<td><b>Image</b></td>
							<td><img src="<?php echo $doc['image'];?>" style="width:100px;height:100px"></img></td>
							</tr>
							<tr>
							<td><b>Product Name</b></td>
							<td><?php echo $doc['name'];?></td>
							</tr>
							<tr>
							<td><b>Price Per Unit</b></td>
							<td>Rs <?php echo $doc['price'];?></td>
							</tr>
							<tr>
							<td><b>Quantity</b></td>
							<td><?php echo $qty?></td>
							</tr>
						</tbody>
					</table>
				  </div>					  
			 </div>
		 </div>
		 <div class="col-md-3 cart-total">
			<form action="" method="POST">
				<div class="price-details">
					<h3>Price Details</h3>
					<span>Price</span>
					<span class="total">Rs <?php echo $doc['price'];?></span>
					<span>Discount</span>
					<span class="total">---</span>
					<span>Quantity</span>
					<span class="total"><?php echo $qty;?></span>
					<div class="clearfix"></div>				 
				</div>	
				<h4 class="last-price">TOTAL</h4>
				<span class="total final simpleCart_total"></span>
				<div class="clearfix"></div>
				<?php
						if(empty($login_session)){
							echo "<div class='alert alert-info' role='alert'>
							You need to login before placing an order. Click <a href='login.php'>here</a></div>";
						}
						else{?>
						<input class="order simpleCart_empty" href="javascript:;" type="submit" value="BUY NOW" name="submit"/>
						<?php
						}
						echo $error;
						?>	

				</div>
			<form>
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
					 <li><a href="product.php">Flowers</a></li>				 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2023 Online Flower Shop. All Rights Reserved</p>
		 </div>
</div>		 
</body>
</html>