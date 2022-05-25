<?php include('includes/header.php');?>
			
	<div class="content_wrapper">
	<?php if(!isset($_GET['action'])){?>
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

	<?php
	cart();
	?>
		<div id="products_box">

			<?php getPro(); ?>

			<?php get_pro_by_cat_id(); ?>

			<?php get_brand_by_brand_id(); ?>

		</div><!-- /#products_box  -->
	</div>
	<?php }else{ ?>
	<?php 
	include('login.php');	
	} ?>
	</div><!-- /.content_wrapper-->
<?php include('includes/footer.php');?>