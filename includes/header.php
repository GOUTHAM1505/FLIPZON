<?php

include("functions/functions.php");
include("includes/db.php");
?>
<!DOCTYPE html><!-- HTML5 declaration --->

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