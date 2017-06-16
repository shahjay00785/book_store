<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php include_once('admin_header.php'); ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include_once('admin_menu.php'); ?>
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

    <div class="container-fluid">

      <?php
      if(!isset($edit_user)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            user Add
          </h1>
          <ol class="breadcrumb">
            <li>
              <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('Admin_controller/Admin/manage_dashboard'); ?>">Dashboard</a>
            </li>
            <li class="active">
              <i class="fa fa-edit"></i> Forms
            </li>
          </ol>
        </div>
        <div class="col-lg-6">

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_user/add" enctype="multipart/form-data">

            <div class="form-group">
              <label>User first name</label>
              <input type="text" class="form-control" id="txt_user_first_name" name="txt_user_first_name" placeholder="user first name">
              <div id='myform_txt_user_first_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>User lastname</label>
              <input type="text" class="form-control" id="txt_user_last_name" name="txt_user_last_name" placeholder="user lastname">
              <div id='myform_txt_user_last_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>user Gender</label>
              <br>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_male" id="txt_radio_male" value="male" checked>male
              </label>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_male" id="txt_radio_female" value="female">female
              </label>
            </div>

            <div class="form-group">
              <label>user Email</label>
              <input type="text" class="form-control" id="txt_user_email" name="txt_user_email" placeholder="user Contact Number">
              <div id='myform_txt_user_email_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>user contact Num</label>
              <input type="text" class="form-control" id="txt_user_contactnum" name="txt_user_contactnum" placeholder="user Contact Number">
              <div id='myform_txt_user_contactnum_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>user password</label>
              <input type="password" class="form-control" id="txt_user_password" name="txt_user_password" placeholder="user Website">
              <div id='myform_txt_user_password_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>










            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
          foreach ($users->result() as  $row_user) {
            //print_r($row_user);
          }
          ?>
          <div class="col-lg-12">
            <h1 class="page-header">
              User Edit <a href="<?php echo base_url('Admin_controller/admin/manage_user'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a>
            </h1>

            <ol class="breadcrumb">
              <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                <i class="fa fa-edit"></i> Forms
              </li>
            </ol>
          </div>
          <div class="col-lg-6">

            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url('Admin_controller/Admin/manage_user/do_update/').$row_user->user_id; ?>" enctype="multipart/form-data">

              <div class="form-group">
                <label>User first name</label>
                <input type="text" class="form-control" id="txt_user_first_name" name="txt_user_first_name" placeholder="user first name" value="<?php echo $row_user->user_first_name; ?>">
                <div id='myform_txt_user_first_name_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>User lastname</label>
                <input type="text" class="form-control" id="txt_user_last_name" name="txt_user_last_name" placeholder="user lastname" value="<?php echo $row_user->user_last_name; ?>">
                <div id='myform_txt_user_last_name_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>


              <div class="form-group">
                <label>user Gender</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_male" id="txt_radio_male" value="male" checked
                  <?php echo ($row_user->user_gender=='male')?'checked':'' ?>>male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_male" id="txt_radio_female" value="female"
                  <?php echo ($row_user->user_gender=='female')?'checked':'' ?>>female
                </label>
              </div>

              <div class="form-group">
                <label>user Email</label>
                <input type="text" class="form-control" id="txt_user_email" name="txt_user_email" placeholder="user Contact Number"
                value="<?php echo $row_user->user_email; ?>">
                <div id='myform_txt_user_email_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>


              <div class="form-group">
                <label>user contact Num</label>
                <input type="text" class="form-control" id="txt_user_contactnum" name="txt_user_contactnum" placeholder="user Contact Number"
                value="<?php echo $row_user->user_contactnum; ?>">
                <div id='myform_txt_user_contactnum_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>user password</label>
                <input type="password" class="form-control" id="txt_user_password" name="txt_user_password" placeholder="user Website">
                <div id='myform_txt_user_password_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>










              <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
              <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

            </form>


            <?php
          }

          ?>







        </div>

        <div class="col-lg-12">
          <h2>user Views <a href="<?php echo base_url('Admin_controller/admin/manage_user'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>#Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>user Gender</th>
                  <th>user Email</th>
                  <th>user Contact Num</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
              </thead>




              <?php
              $i=0;
              foreach ($users->result()as $row)
              {


                $i++;
                if($i%2==0){
                  ?>
                  <tr class="active">
                    <?php
                  }  else { ?>
                    <tr class="success">
                      <?php
                    }
                    ?>


                    <td><?php echo $row->user_id; ?></td>
                    <td><?php echo $row->user_first_name; ?></td>
                    <td><?php echo $row->user_last_name; ?></td>
                    <td><?php echo $row->user_gender; ?></td>

                    <td><?php echo $row->user_email; ?></td>
                    <td><?php echo $row->user_contactnum; ?></td>

                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_user/delete/').$row->user_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_user/edit/').$row->user_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
                  </tr>


                  <?php
                }
                ?>




              </div>
              <!-- /#page-wrapper -->

            </div>

            <!--- validation --->

            <script language="JavaScript" type="text/javascript"
            xml:space="preserve">//<![CDATA[
              //You should create the validator only after the definition of the HTML form
              var frmvalidator  = new Validator("myform");
              frmvalidator.EnableOnPageErrorDisplay();
              frmvalidator.EnableMsgsTogether();
              frmvalidator.addValidation("txt_user_name","req","Please enter user Name");

              frmvalidator.addValidation("txt_user_contactnum","req","Please enter user Contact Number");
              frmvalidator.addValidation("txt_user_website","req","Please enter user Website");
              frmvalidator.addValidation("txt_user_email","req","Please enter user Email");
              frmvalidator.addValidation("txt_user_desc","req","Please Describe the user");
              frmvalidator.addValidation("txt_male","selone","please select any ");

              </script>

              <!--validation-->

              <!-- jQuery Version 1.11.0 -->
              <?php include_once('admin_footer.php'); ?>
