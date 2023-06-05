<?php
include('session.php');
?>
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
			<div class="top_left">
				<ul>
					<li class="top_link"><a href=""><?php echo $login_session; ?></a></li>|
                     <li class="top_link"><a href="login.php">Login</a></li>|
					<li class="top_link"><a href="myaccount.php">My Account</a></li>					
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
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!--Save Changes-->
    <?php
    include('dbconnection.php');
    $message='';
    $error='';
    $userid=$row['id'];
    if (isset($_POST['savechanges'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $mobilenumber = $_POST['mobilenumber'];
        $emailaddress = $_POST['emailaddress'];
        $username= $_POST['username'];
        
        
        if(!ctype_digit($mobilenumber) || strlen($mobilenumber)<8 || strlen($mobilenumber)>8){
            $error = "<div class='alert alert-danger' role='alert'>
			  Invalid Mobile Number </div>";
        }
        else{
			   $UserCol = $db->Users;
			   $updateRes = $UserCol->updateOne(
			   ['id' => $userid],
			   ['$set' => [
				   'firstname' => $firstname,
				   'lastname' => $lastname,
				   'address' => $address,
				   'mobilenumber' => $mobilenumber,
				   'emailaddress' => $emailaddress,
				   'username' => $username
			   ]]
		   );
                $message="<div class='alert alert-success' role='alert'>
			  Changes Saved !</div>";
        }
    }
    ?>
<!--Save Password-->
    <?php
    include('dbconnection.php');
    $errormessage='';
    $user=$row['id'];
    
    if(isset($_POST['savepassword'])){
        
        $oldpassword=$_POST['oldpassword'];
        $newpassword=$_POST['newpassword'];
        $confirmpassword=$_POST['confirmpassword'];

		$UCol = $db->Users;
        
			$dbpassword = $row['password'];

        if ($oldpassword == $dbpassword){
            if ($newpassword == $confirmpassword){
				$update = $UCol->updateOne(
					['id' => $user],
					['$set' => ['password' => $newpassword]]
				);
                
                session_destroy();
                header('location: login.php');
            }
            else{
                 $errormessage="<div class='alert alert-danger' role='alert'>
			  New password doesn't match !</div>";
            }
        }
        else{
              $errormessage="<div class='alert alert-danger' role='alert'>
			  Old Password doesn't match !</div>";
        }
        
    }
    ?>
<!--Get Past Orders--> 
<?php
$OrderCol = $db->Order;
$Orderlist = $OrderCol->find(
	[]
);
?>
<!---->  
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">My Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Your Details</h2>
             <?php echo $error; ?>
             <?php echo $message; ?>
			 <div class="registration_form">
			 <!-- Form -->
				<form action="" method="post">
					<div>
						<label>
							<input placeholder="First name:" type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'] ?>" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Last name:" type="text" id="lastname" name="lastname" value="<?php echo $row['lastname'] ?>" required>
						</label>
					</div>
                    <div>
						<label>
							<input placeholder="Address:" type="text" id="address" name="address" value="<?php echo $row['address'] ?>" required>
						</label>
					</div>	
                    <div>
						<label>
							<input placeholder="Mobile:" type="text" id="mobilenumber" name="mobilenumber" value="<?php echo $row['mobilenumber'] ?>" required>
						</label>
					</div>	
					<div>
						<label>
							<input placeholder="Email Address:" type="email" id="emailaddress" name="emailaddress" value="<?php echo $row['emailaddress'] ?>" required>
						</label>
					</div>
                    	<div>
						<label>
							<input placeholder="Username:" type="text" id="username" name="username" value="<?php echo $row['username'] ?>" required>
						</label>
					</div>
													
			
					<div>
						<input type="submit" value="save changes" id="savechanges" name="savechanges">
					</div>
					
				</form>
				<!-- /Form -->
			 </div>
</br>
			 <h2>Change Your Password</h2>
             <?php echo $errormessage; ?>
             <div class="registration_form">
             <form action="" method="post">
         		<div>
						<label>
							<input placeholder="Old Password:" type="password" id="oldpassword" name="oldpassword" required>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="New Password:" type="password" id="newpassword" name="newpassword" required>
						</label>
					</div>	
                <div>
						<label>
							<input placeholder="Confirm New Password:" type="password" id="confirmpassword" name="confirmpassword" required>
						</label>
					</div>	
                 <div>
						<input type="submit" value="save password" id="savepassword" name="savepassword">
					</div>
             </form>

                 </div>
		 </div>
         
         <div class="registration_left">
		 <h2>Past Orders</h2>
             <div class="registration_form">
			 <?php foreach($Orderlist as $Order){ ?>
			 <table class="table table-borderless">
				<tbody>
					<tr>
					<td><b>Order No</b></td>
					<td><?php echo $Order['id'];?></td>
					</tr>
					<tr>
					<td><b>Date</b></td>
					<td><?php echo $Order['date'];?></td>
					</tr>
					<tr>
					<td><b>Product Name</b></td>
					<td><?php
					$pCol = $db->Product;
					$p = $pCol->findOne(['id' => $Order['productid']]);
					echo $p['name'];
					?></td>
					</tr>
					<tr>
					<td><b>Quantity</b></td>
					<td><?php echo $Order['quantity'];?></td>
					</tr>
					<tr>
					<td><b>Total Price</b></td>
					<td>Rs <?php echo $Order['totalprice'];?></td>
					</tr>
				</tbody>
				</table>
			 </br>
				<?php } ?>
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
					 <li><a href="#">Flowers</a></li>					 
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