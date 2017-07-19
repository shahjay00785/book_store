<div class="header">
	<div class="top-header">
		<div class="container">
			<div class="top-header-left">
				<ul class="support">
					<li><a href="#"><label> </label></a></li>
					<li><a href="#">24x7 live<span class="live"> support</span></a></li>
				</ul>
				<ul class="support">
					<li class="van"><a href="#"><label> </label></a></li>
					<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="top-header-right">
				<div class="down-top">
					<select class="in-drop">
						<option value="English" class="in-of">English</option>
						<option value="Japanese" class="in-of">Japanese</option>
						<option value="French" class="in-of">French</option>
						<option value="German" class="in-of">German</option>
					</select>
				</div>
				<div class="down-top top-down">
					<select class="in-drop">

						<option value="Dollar" class="in-of">Dollar</option>
						<option value="Yen" class="in-of">Yen</option>
						<option value="Euro" class="in-of">Euro</option>
					</select>
				</div>
				<!---->
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="bottom-header">
		<div class="container">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="<?php echo base_url('User_Controller/user_home_controller'); ?>"><img src="<?php echo base_url('Assests/User_template/images/logo.png'); ?>" alt=" " /></a>
				</div>
				<div class="search">
					<input type="text" 	autocomplete="off"  id="txt_book_master_name" name="txt_book_master_name" onkeyup="getdata();" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"  onkeyup="getgoogle()">
					<input type="submit">

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-right">
				<div class="account"><a href="<?php echo base_url('User_Controller/User_login_controller'); ?>"><span> </span>
					<?php
					if(isset($_SESSION["useremail"])){
						echo $_SESSION["useremail"];
					}
					else{
						echo "Your Account";
					}
					?>
				</a></div>
				<ul class="login">
					<?php

					if(isset($_SESSION["useremail"])){
						?>
						<li>
							<a href="<?php echo base_url('User_Controller/user_login_controller/manage_logout/logout'); ?>">Logout</a></li>
							<?php
						}
						else {
							?>
							<li><a href="<?php echo base_url('User_Controller/user_login_controller'); ?>"><span> </span>LOGIN</a></li> |
							<li ><a href="<?php echo base_url('User_Controller/user_signup_controller'); ?>">SIGNUP</a></li>

							<?php
						}
						?>

					</ul>



					<?php
					if(isset($_SESSION["useremail"]))
					{
					$id=session_id();

					$products=$this->db->get_where('tbl_cart',array('session_id'=>$id));
					$cart_item=$products->num_rows();

					if($products->num_rows()==0){
					?>
					<div class="cart">
						<a href="">
							<span><?php echo "<p class=login style=padding-left:30px;>empty</p>"; ?></span>

					</a>
				</div>
					<?php
					}
					else {
					?>
					<div class="cart">
						<a href="<?php echo  base_url('User_Controller/user_checkout_controller'); ?>">
							<span><?php echo "<p class=login style=padding-left:30px;>" .$cart_item."</p>"; ?>   </span>
						</a>
					</div>
					<?php
					}
				}
				else {


					?>


					<div class="cart">
						<a href="<?php echo base_url('User_Controller/User_login_controller'); ?>">
							<span>   </span>
						</a>
					</div>
					<?php

				}
					?>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
