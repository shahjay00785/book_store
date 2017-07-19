
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
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
        <div class=" contact_right">          <form class="form-horizontal" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/reg_user/add" enctype="multipart/form-data">
            <fieldset>
              <legend>Registration</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Full Name*</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="txt_reg_name" name="txt_reg_name" placeholder="User Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="txt_reg_email" name="txt_reg_email" placeholder="email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Number*</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="txt_reg_number" name="txt_reg_number" placeholder="number">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password*</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="txt_reg_pwd1" name="txt_reg_pwd1" placeholder="Password">

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">RE-Password*</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="txt_reg_pwd2" name="txt_reg_pwd2" placeholder="Password">

                </div>
              </div>

                <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <!--- MENU-->
    <?php echo include_once('user_menu.php'); ?>
    <!--MENU-->
    <div class="clearfix"> </div>
  </div>



  <!-- footer-->
  <?php include_once('user_footer.php'); ?>
  <!-- footer-->
</div>
</body>
</html>
