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
  <link href="<?php echo base_url('Assests/User_template/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--theme-style-->
  <link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--//theme-style-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!--//fonts-->
  <script src="<?php echo base_url('Assests/User_template/js/jquery.min.js'); ?>"></script>
</head>
<body>
  <!--header-->
  <?php echo include_once('user_header.php'); ?>
  <!---->
  <div class="container">
    <div class="main">
        <div class="reservation_top">
            <div class=" contact_right">
              <h3>Contact Form</h3>
              <div class="contact-form">
            <form method="post" action="<?php echo base_url('User_Controller/user_account_controller/add_user/add'); ?>">


              <input type="text" class="textbox" name="txt_name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" style="width:500px;">
              <input type="text" class="textbox" name="txt_phone" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" style="width:500px;">
              <input type="text" class="textbox" name="txt_pincode"value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" style="width:500px;">
              <input type="text" class="textbox" name="txt_email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="width:500px;">
              <textarea value="Address" name="txt_address" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}" style="width:500px;">address</textarea>
              <input type="text" class="textbox" name="txt_city" value="city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="width:500px;">
              <input type="text" class="textbox" name="txt_state" value="state" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="width:500px;">
              <input type="text" class="textbox"  name="txt_landmark"value="Landmark" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="width:500px;">
              <input type="submit" name="btn_submit" value="submit">

            </form>

          </div>
            </div>
           </div>
          </div>

  </div>



<!-- footer-->
    <?php include_once('user_footer.php'); ?>
    <!-- footer-->
  </div>
</body>
</html>
