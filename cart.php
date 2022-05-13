<?php include('includes/header.php');?>

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

        <div class="shopping_cart_container">

        <div id="shopping_cart" align="right" style="padding:15px">
            <?php

                if(isset($_SESSION['customer_email'])){
                    echo "<b>Your Email:</b>" . $_SESSION['customer_email'];
                }
                else{
                    echo " ";
                }
            ?>
            <b style="color:navy"> Your Cart -</b> Total Items: <?php total_items() ; ?> Total Price: <?php total_price();?>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
        <table align="center" width="100%">
            <tr align="center">
                <th>Remove</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>

            <tr align="center">
                <td><input type="checkbox" name="remove[]" value="" /></td>
                <td>Product Title</td>
                <td><input type="text" size="4" name="qty" value="" /></td>
                <td>Price</td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" name="update_cart" value="Update Cart" /></td>
                <td><input type="submit" name="continue" value="Continue Shopping" /></td>
                <td><button><a href="checkout.php" style="text-decoration:none;color:black;">Checkout</a></td>
            </tr>
        </table>
        </form>

        </div><!--shopping_cart_container -->

		<div id="products_box">

			

		</div><!-- /#products_box  -->
	</div>

	</div><!-- /.content_wrapper-->
<?php include('includes/footer.php');?>