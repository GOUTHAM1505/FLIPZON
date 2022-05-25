<?php
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<!DOCTYPE html><!-- HTML5 declaration --->

<html>

<head>
<title>FLIPZON</title>

<link rel="stylesheet" href="styles/styles.css" media="all" />

<script src="js/jquery-3.6.0.js"></script>
</head>

<body>

<!-- Main container starts here -->
<div class="main_wrapper">

	<div class="header_wrapper">
	<div class="header_logo">
	<a href="index.php">
	<!-- <img id="logo" src="images/ample.png" height=30> -->

	</a>
	</div><!--/.header_logo-->

	<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
		<input type="text" name="user_query" placeholder="Search a Product" />
		<input type="submit" name="search" value="Search" />
		</form>
	</div>
	<div class="cart">
		<ul>
			<li class="dropdown_header_cart">
				<div id="notification_total_art" class="shopping-cart">
                    <div class="noti_cart_number">
                        <?php
                        total_items();
                        ?>
                    </div>
					<img src="images/carticon.png" id="cart_image" height="50px">
				</div>
			</li>	
		</ul>
	</div>

	<?php if(!isset($_SESSION['user_id'])){?>
	<div class="register_login">
		<div class="login"><a href="index.php?action=login">Login</a></div>
		&nbsp;&nbsp;
		<div class="register"><a href="register.php">Register</a></div>
	</div>
	<?php }else{ ?>
	
	<?php
		$select_user = mysqli_query($con,"select * from users where id='$_SESSION[user_id]'");
		$data_user = mysqli_fetch_array($select_user);
	?>
	<div id="profile">
		<ul>
			<li class="dropdown_header">
				<a>
					<?php if($data_user['image']!=''){?>
						<span><img src="upload-files/<?php echo $data_user['image']; ?>"></span>
					<?php }else{ ?>
						<span><img src="images/profile-icon.png"></span>
					<?php } ?>
				</a>
				<ul class="dropdown_menu_header">
					<li><a href="my_account.php?action=edit_account">Account Settings</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	
	<?php } ?>
	</div><!--/.header_wrapper-->

	<div class="menubar">
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All products</a></li>
			<li><a href="my_account.php">My Account</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<?php include('js/drop_down_menu.php'); ?>