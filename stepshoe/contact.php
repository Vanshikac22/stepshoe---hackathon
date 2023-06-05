<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>STEPSHOE | Contact</title>
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

			 <!--Main Navigation Bar-->
		 
 <div class="top-nav">
				<ul class="memenu skyblue">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="product.php">Shoes</a></li>
					<li class="grid"><a href="aboutus.php">About Us</a></li>
					<li class="grid"><a href="contact.php">Contact Us</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>


			 <!--cart logo-->

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



<!--php script-->
<!-- backend for contact us form -->
<!-- connection of database -->
<!-- initialization of $error variable(empty string) which will be used to store the error or success messages to be displayed to user -->
<!-- checks if aubmit button has been clicked first -->
<!-- when clicked, vales from the form submitted by user will be stored in $name, $email, $mobile, $msg -->
<!-- validation is then carried out after the first if condition in line 162 -->
<!-- filter_var function checks if email provided by user is valid -->
<!-- if email is invalid, an error msg "invalid email" will be stored in the $error variable -->
<!-- line 169 - query collection is accessed and reference is saved  -->

    <?php
    include('dbconnection.php');
    $error='';
    
    if(isset($_POST['submit'])){
        
        $name=$_POST['username'];
        $email=$_POST['useremail'];
        $mobile=$_POST['usermobile'];
        $msg=$_POST['usermsg'];
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)==false){
            $error = "<div class='alert alert-danger' role='alert'>
			  Invalid Email </div>";
        }
        else{

			$queryCol = $db->Query;
			$insert = $queryCol->insertOne(
				['id' => mt_rand(), 'name' => $name, 'email' => $email, 'mobile' => $mobile, 'message' => $msg]
			);
			$res = $insert->getInsertedId();
        if (!empty($res)){
            $error="<div class='alert alert-success' role='alert'>
			  Query Sent ! </div>";
        }
        else{
           $error="<div class='alert alert-danger' role='alert'>
			  Query couldn't be send ! </div>";
        }
            
        }
    }
    ?>
<!---->
<div class="contact">
	  <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			<!---start-contact---->
			<h3>Contact Us</h3>
          <?php echo $error; ?>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
					<div class="contact_info">
			    	 	<h4>Find Us Here</h4>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7487.449176550027!2d57.46131233094225!3d-20.228762555077232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5acc322e8c73%3A0xfb40422397aa49af!2sMCB!5e0!3m2!1sen!2sus!4v1675858972689!5m2!1sen!2sus"></iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.3977464914165!2d57.65104141486677!3d-20.03377608654566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217d007a904bd275%3A0x306ba126f143377!2sPlateau+Rd%2C+Goodlands%2C+Mauritius!5e0!3m2!1sen!2sus!4v1508004583550" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
                        </div>
      				</div>
      			<div class="company_address">
				     	<h4>Shop Information :</h4>
						    	<p>Royal Road,</p>
						   		<p>Beau Bassin, Creve Cooeur, Quatre Bornes</p>
						   		<p>Mauritius</p>
				   		<p>Phone:(230) 210-9668</p>
				   		<p>Fax: (230) 466-8798</p>
				 	 	<p>Email: <a href="mailto:info@example.com">info@mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Instagram</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="username" id="username" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="useremail" id="useremail" type="text" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="usermobile" id="usermobile" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="usermsg" id="usermsg" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit" name="submit" id="submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
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