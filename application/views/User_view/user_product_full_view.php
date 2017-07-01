<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Product details</title>
	<link href="<?php echo base_url('Assests/User_template/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('Assests/User_template/css/etalage.css');?>" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script src="<?php echo base_url('Assests/User_template/js/jquery.min.js'); ?>"></script>

	<script src="<?php echo base_url('Assests/User_template/js/jquery.etalage.min.js');?>"></script>
	<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 400,
			source_image_width: 900,
			source_image_height: 1200,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});

	});
	</script>

</head>
<body>
	<!--header-->
	<?php echo include_once('user_header.php'); ?>
	<!---->

	<div class="container">

		<div class=" single_top">

			<?php
				foreach($pdata->result() as  $row_data) {
				}
			?>
			<div class="single_grid">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						<li>
							<a href="optionallink.html">
								<img class="etalage_thumb_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive" />
								<img class="etalage_source_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive" title="" />
							</a>
						</li>
						<li>
							<img class="etalage_thumb_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive" />
							<img class="etalage_source_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive" title="" />
						</li>
						<li>
							<img class="etalage_thumb_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive"  />
							<img class="etalage_source_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive"  />
						</li>
						<li>
							<img class="etalage_thumb_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive"  />
							<img class="etalage_source_image" src="<?php echo base_url('img/book_master_img/').$row_data->book_master_img; ?>" class="img-responsive"  />
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="desc1 span_3_of_2">



					<h4><?php echo $row_data->book_master_name; ?></h4>
					<div class="cart-b">
						<div class="left-n ">Rs.<?php echo $row_data->book_master_price; ?></div>
						<a class="now-get get-cart-in" href="#">ADD TO CART</a>
						<div class="clearfix"></div>
					</div>
					<h6>100 items in stock</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="share">
						<h5>Share Product :</h5>
						<ul class="share_nav">
							<li><a href="#"><img src="<?php echo base_url('Assests/User_template/images/facebook.png'); ?>" title="facebook"></a></li>
							<li><a href="#"><img src="<?php echo base_url('Assests/User_template/images/twitter.png'); ?>" title="Twiiter"></a></li>
							<li><a href="#"><img src="<?php echo base_url('Assests/User_template/images/rss.png'); ?>" title="Rss"></a></li>
							<li><a href="#"><img src="<?php echo base_url('Assests/User_template/images/gpluse.png'); ?>" title="Google+"></a></li>
						</ul>
					</div>


				</div>
				<? } ?>
				<div class="clearfix"> </div>
			</div>
			<ul id="flexiselDemo1">
				<li><img src="images/pi.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
				<li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
				<li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
				<li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
				<li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			</ul>
			<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint:480,
							visibleItems: 1
						},
						landscape: {
							changePoint:640,
							visibleItems: 2
						},
						tablet: {
							changePoint:768,
							visibleItems: 3
						}
					}
				});

			});
			</script>
			<script type="text/javascript" src="<?php echo base_url('Assests/User_template/js/jquery.flexisel.js'); ?>"></script>

			<div class="toogle">
				<h3 class="m_3">Product Details</h3>
				<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
			</div>
		</div>

		<!---- Menu--->
		<?php echo include_once('user_menu.php'); ?>
	</div>
	<!----footer-->
	<?php echo include_once('user_footer.php'); ?>
	<!---- Footer--->

</body>
</html>
