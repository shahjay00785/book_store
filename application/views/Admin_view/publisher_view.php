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
      if(!isset($edit_publisher)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            publisher Add
          </h1>
          <ol class="breadcrumb">
            <li>
              <i class="fa fa-dashboard"></i>   <a href="<?php echo base_url('Admin_controller/Admin/manage_dashboard'); ?>">Dashboard</a>
            </li>
            <li class="active">
              <i class="fa fa-edit"></i> Forms
            </li>
          </ol>
        </div>
        <div class="col-lg-6">

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_publisher/add" enctype="multipart/form-data">

            <div class="form-group">
              <label>publisher Name</label>
              <input type="text" class="form-control" id="txt_publisher_name" name="txt_publisher_name" placeholder="publisher Name">
              <div id='myform_txt_publisher_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>publisher Email</label>
              <input type="text" class="form-control" id="txt_publisher_email" name="txt_publisher_email" placeholder="publisher Contact Number">
              <div id='myform_txt_publisher_email_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>publisher contact Num</label>
              <input type="text" class="form-control" id="txt_publisher_contactnum" name="txt_publisher_contactnum" placeholder="publisher Contact Number">
              <div id='myform_txt_publisher_contactnum_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>publisher website</label>
              <input type="text" class="form-control" id="txt_publisher_website" name="txt_publisher_website" placeholder="publisher Website">
              <div id='myform_txt_publisher_website_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>Available</label>
              <br>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_yes" id="radio_yes" value="Yes" checked>Yes
              </label>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_yes" id="radio_no" value="No">No
              </label>
            </div>


            <div class="form-group">
              <label>publisher Description</label>
              <input type="textarea" class="form-control"  rows="3" id="txt_publisher_desc" name="txt_publisher_desc" placeholder="publisher Desciption">
              <div id='myform_txt_publisher_desc_errorloc' class="error_strings"></div>
            </div>








            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
          foreach ($publishers->result() as  $row_publisher) {
            //print_r($row_publisher);
          }
          ?>
          <div class="col-lg-12">
            <h1 class="page-header">
              publisher Edit <a href="<?php echo base_url('Admin_controller/admin/manage_publisher'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a>
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

            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url('Admin_controller/Admin/manage_publisher/do_update/').$row_publisher->publisher_id; ?>" enctype="multipart/form-data">

              <div class="form-group">
                <label>publisher Name</label>
                <input type="text" class="form-control" id="txt_publisher_name" name="txt_publisher_name" placeholder="publisher Name" value="<?php echo $row_publisher->publisher_name; ?>">
                <div id='myform_txt_publisher_name_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>


              <div class="form-group">
                <label>publisher Email</label>
                <input type="text" class="form-control" id="txt_publisher_email" name="txt_publisher_email" placeholder="publisher email" value="<?php echo $row_publisher->publisher_email; ?>" >
                <div id='myform_txt_publisher_email_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>publisher contact Num</label>
                <input type="text" class="form-control" id="txt_publisher_contactnum" name="txt_publisher_contactnum" placeholder="publisher Contact Number" value="<?php echo $row_publisher->publisher_contactnum; ?>">
                <div id='myform_txt_publisher_contactnum_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>publisher website</label>
                <input type="text" class="form-control" id="txt_publisher_website" name="txt_publisher_website" placeholder="publisher Website" value="<?php echo $row_publisher->publisher_website; ?>">
                <div id='myform_txt_publisher_website_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>Available</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_yes" id="radio_yes" value="Yes" checked
                  <?php echo ($row_publisher->publisher_status=='Yes')?'checked':'' ?>>Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_yes" id="radio_no" value="No"
                  <?php echo ($row_publisher->publisher_status=='No')?'checked':'' ?>>No
                </label>
              </div>


              <div class="form-group">
                <label>publisher Description</label>
                <input type="textarea" class="form-control"  rows="3" id="txt_publisher_desc" name="txt_publisher_desc" placeholder="publisher Desciption" value="<?php echo $row_publisher->publisher_desc; ?>">
                <div id='myform_txt_publisher_desc_errorloc' class="error_strings"></div>
              </div>








              <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
              <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

            </form>

            <?php
          }

          ?>







        </div>

        <div class="col-lg-12">
          <h2>publisher Views <a href="<?php echo base_url('Admin_controller/admin/manage_publisher'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>publisher Id</th>
                  <th>publisher Name</th>

                  <th>publisher Website</th>
                  <th>publisher Email</th>
                  <th>publisher Contact Num</th>
                  <th>publisher Descrition</th>
                  <th>publisheregor Available</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
              </thead>




              <?php
              $i=0;
              foreach ($publishers->result()as $row)
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


                    <td><?php echo $row->publisher_id; ?></td>
                    <td><?php echo $row->publisher_name; ?></td>

                    <td><?php echo $row->publisher_website; ?></td>
                    <td><?php echo $row->publisher_email; ?></td>
                    <td><?php echo $row->publisher_contactnum; ?></td>
                    <td><?php echo $row->publisher_desc; ?></td>
                    <td><?php echo $row->publisher_status; ?></td>

                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_publisher/delete/').$row->publisher_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_publisher/edit/').$row->publisher_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
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
              frmvalidator.addValidation("txt_publisher_name","req","Please enter publisher Name");

              frmvalidator.addValidation("txt_publisher_contactnum","req","Please enter publisher Contact Number");
              frmvalidator.addValidation("txt_publisher_website","req","Please enter publisher Website");
              frmvalidator.addValidation("txt_publisher_email","req","Please enter publisher Email");
              frmvalidator.addValidation("txt_publisher_desc","req","Please Describe the publisher");
              frmvalidator.addValidation("txt_male","selone","please select any ");

              </script>

              <!--validation-->

              <!-- jQuery Version 1.11.0 -->
              <?php include_once('admin_footer.php'); ?>
