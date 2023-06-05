<!DOCTYPE html>
<html>
<head>
<title>Online Flower Shop | Account</title>
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
                     <li class="top_link"><a href="login.php">Login</a></li>|
					<li class="top_link"><a href="login.php">My Account</a></li>					
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
			 <!---->
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!--PHP-->
    <?php
    session_start();
    include('dbconnection.php');
    $message='';
    $error='';
    
    if (isset($_POST['register'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $mobilenumber = $_POST['mobilenumber'];
        $emailaddress = $_POST['emailaddress'];
        $username= $_POST['username'];
        $password= $_POST['password'];
        $confirmpassword= $_POST['confirmpassword'];
        
        //check if user exist
		$UserCol = $db->Users;
		$doc = $UserCol->findOne(
			['firstname' => $firstname, 'lastname' => $lastname, 'email' => $emailaddress]
		);
        if (!empty($doc)){
            ?>
    <script type="text/javascript">
	alert("User already exist");
	</script>
    <?php 
        }
        else{
        if(!ctype_digit($mobilenumber) || strlen($mobilenumber)<8 || strlen($mobilenumber)>8){
            $error = "<div class='alert alert-danger' role='alert'>
			  Invalid Mobile Number </div>";
        }
        else{
        if($password === $confirmpassword){

			$UCol = $db->Users;
			$insert = $UCol->insertOne(
				[
					'id' => mt_rand(),
					'firstname' => $firstname,
					'lastname' => $lastname,
					'address' => $address,
					'mobilenumber' => $mobilenumber,
					'emailaddress' => $emailaddress,
					'username' => $username,
					'password' => $password,
					'confirmpassword' => $confirmpassword,
				]
			);

            $res = $insert->getInsertedId();
            if(empty($res)){
                $error="<div class='alert alert-danger' role='alert'>
			  Error Registering. Please Try Again !</div>";
            }
            else{
                $message="<div class='alert alert-success' role='alert'>
			  Registration Complete. To Login please click <a href='login.php'>here</a> </div>";
            }
        }
            else{
                $error="<div class='alert alert-danger' role='alert'>
			  Password doesn't match !</div>";
            }
        }
    }
    }
    ?>
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Create Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
        <?php
            echo $error;
             echo $message;
        ?>
			 <div class="registration_form">
			 <!-- Form -->
				<form action="" method="post">
					<div>
						<label>
							<input placeholder="First name:" type="text" id="firstname" name="firstname" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Last name:" type="text" id="lastname" name="lastname" required>
						</label>
					</div>
                    <div>
						<label>
							<input placeholder="Address:" type="text" id="address" name="address"required>
						</label>
					</div>	
                    <div>
						<label>
							<input placeholder="Mobile:" type="text" id="mobilenumber" name="mobilenumber" required>
						</label>
					</div>	
					<div>
						<label>
							<input placeholder="Email Address:" type="email" id="emailaddress" name="emailaddress" required>
						</label>
					</div>
                    	<div>
						<label>
							<input placeholder="Username:" type="text" id="username" name="username" required>
						</label>
					</div>
													
					<div>
						<label>
							<input placeholder="Password" type="password" id="password" name="password" required>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="Retype Password" type="password" id="confirmpassword" name="confirmpassword" required>
						</label>
					</div>	
					<div>
						<input type="submit" value="create an account" id="register" name="register">
					</div>
					
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
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