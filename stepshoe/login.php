<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>STEPSHOE | Login</title>
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
					<a href="index.php"><h1>STEPSHOE</h1></a>
				</div>
			 <!---->
		 
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!--PHP-->
<?php
include('dbconnection.php'); // including database connection
$error=''; // Variable To Store Error Message
if (isset($_POST['login']))
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
    
// SQL query to fetch information of registerd users and finds user match.
$UserCol = $db->Users;
$doc = $UserCol->findOne(
	['username' => $username, 'password' => $password]
);

    if(!empty($doc)){
        if (!empty($login_session) && $login_session==$username){
            $error = "<div class='alert alert-info' role='alert'>
			  You are already logged on ! </div>";
        }
        else{
           $_SESSION['login_user']=$username; 
            header("location: index.php");
        }
    }
        else
        {
            $error = "<div class='alert alert-danger' role='alert'>
			  Wrong Username or Password </div>";
        }
}
?>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the following to continue.</p>
             <?php
                echo $error; 
                      ?>
				 <form action="" method="post">
					 <h5>Username:</h5>	
					 <input type="text" value="" id="username" name="username" required>
					 <h5>Password:</h5>
					 <input type="password" value="" id="password" name="password" required>
        
					 <input type="submit" value="Login" name="login">
             </form>
             <h4 id="h4.-bootstrap-heading">Don't have an account? Create one</h4><br/>
             <a class="acount-btn" href="createaccount.php">Create an Account</a>
				 
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
			 <p>Copyright © 2023 STEPSHOE. All Rights Reserved to Team Bosco</p>
		 </div>
</div>		 
</body>
</html>