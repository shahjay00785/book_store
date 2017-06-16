<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

		<div class="account_grid">
			<div class=" login-right">
				<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
					<div>
						<span>Email Address<label>*</label></span>
						<input type="text">
					</div>
					<div>
						<span>Password<label>*</label></span>
						<input type="text">
					</div>
					<a class="forgot" href="#">Forgot Your Password?</a>
					<input type="submit" value="Login">
				</form>
			</div>
			<div class=" login-left">
				<h3>NEW CUSTOMERS</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="<?php echo base_url('User_Controller/user_signup_controller'); ?>">Create an Account</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php echo include_once('user_menu.php'); ?>


	</div>

	<!---->
	<?php echo include_once('user_footer.php'); ?>
</body>
</html>
