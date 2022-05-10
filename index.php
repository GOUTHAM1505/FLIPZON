<?php

include("functions/functions.php");
include("includes/db.php");
?>

<html>

<head>
<title>FLIPZON</title>

<link rel="stylesheet" href="styles/style1.css" media="all" />
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
					<img src="images/cart_icon.png" id="cart_image" height="50px" >
				</div>
			</li>	
		</ul>
	</div>
	<div class="register_login">
		<div class="login"><a href="index.php?action=login">Login</a></div>
		<div class="register"><a href="customer_register.php">Register</a></div>
	</div>
	
	</div><!--/.header_wrapper-->
	<div class="menubar">
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
	</div>
			
	<div class="content_wrapper">
	<div id="sidebar">
	
		<div id="sidebar_title">Categories</div>
		<ul id="cats">

			<?php 
			getCats();
			?>
		</ul>
		<div id="sidebar_title">Brands</div>
		<ul id="cats">
			
			<?php
			getBrands();
			?>
		</ul>
		
	</div>

	<div id="content_area">
		<div id="products_box">

			<?php getPro(); ?>

			<?php get_pro_by_cat_id(); ?>

			<?php get_brand_by_brand_id(); ?>

		</div><!-- /#products_box  -->
	</div>

	</div><!-- /.content_wrapper-->

	<div id="footer">
	<h2 style="text-align:center; padding-top:30px">&copy; 2020 --<?php echo date('Y');?> by Baindla Goutham</h2>
	</div>	

</div><!-- /.main_wrapper-->
<!-- End Main container starts here --->
</body>

</html>