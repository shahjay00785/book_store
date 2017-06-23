<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<link href="<?php echo base_url('Assests/User_template/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script src="<?php echo base_url('Assests/User_template/js/jquery.min.js');?>"></script>
	<!--script-->

</head>
<body>
	<!--header-->
		<?php echo include_once('user_header.php'); ?>
	<!---->
	<div class="container">

		<div class="women-product">
			<div class=" w_content">
				<div class="women">
					<a href="#"><h4>Books - <span><?php $count=$this->book_master_model->book_master_view();
					echo $count->num_rows(); ?></span> </h4></a>
					<ul class="w_nav">
						<li>Sort : </li>
				     	<li><a class="active" href="#">popular</a></li> |
				     	<li><a href="#">new </a></li> |
				     	<li><a href="#">discount</a></li> |
				     	<li><a href="#">price: Low High </a></li>
				     <div class="clearfix"> </div>
				     </ul>
				     <div class="clearfix"> </div>
				</div>
			</div>
			<!-- grids_of_4 -->

			<?php echo $sub_cat_id; ?>
			<div class="grid-product">
				<?php

						$products=$this->book_master_model->book_master_sub_view($sub_cat_id);
						foreach ($products->result() as $row_product) {
				?>
				<div class=" product-grid">
				 <div class="content_box"><a href="single.html">
					<div class="left-grid-view grid-view-left">
							 <img src="<?php echo base_url('img/book_master_img/').$row_product->book_master_img; ?>" class="img-responsive watch-right" style="padding-right:10px" alt=""  />
								<div class="mask">
													<div class="info">Quick View</div>
									</div>
							</a>
					 </div>
						<h4><a href="#"> <?php echo $row_product->book_master_name; ?></a></h4>
						 <p><?php echo $row_product->book_master_desc; ?></p>
						 <?php echo $row_product->book_master_price; ?>
					</div>

				</div>

				<?php
						}
				 ?>

		 </div>
		</div>




		<?php echo include_once('user_menu.php'); ?>


	</div>

	<!---->
	<?php echo include_once('user_footer.php'); ?>
</body>
</html>
