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
      if(!isset($edit_category)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            Caregory Add
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

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_category/add" enctype="multipart/form-data">

            <div class="form-group">
              <label>Category Name</label>
              <input type="text" class="form-control" id="txt_category_name" name="txt_category_name">
              <div id='myform_txt_category_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>Category Image</label>
              <input type="file" id="txt_category_img" name="txt_category_img">
              <div id='myform_txt_category_img_errorloc' class="error_strings"></div>
            </div>

            <div class="form-group">
              <label>Category Description</label>
              <input type="textarea" class="form-control"  rows="3" placeholder="Enter text" id="txt_category_desc" name="txt_category_desc">
              <div id='myform_txt_category_desc_errorloc' class="error_strings"></div>
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





            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
          foreach ($categories->result() as  $row_category) {
            //print_r($row_category);
          }
          ?>
          <div class="col-lg-12">
            <h1 class="page-header">
              Caregory Edit <a href="<?php echo base_url('Admin_controller/admin/manage_category'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a>
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

            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url('Admin_controller/Admin/manage_category/do_update/').$row_category->cat_id; ?>" enctype="multipart/form-data">

              <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" id="txt_category_name" name="txt_category_name" value="<?php echo $row_category->cat_name; ?>">
              </div>

                <div class="form-group">
                  <label>Category Image</label>
                  <img src="<?php echo base_url('img/category_img/').$row_category->cat_img; ?>" width='100'>
                  <input type="file" id="txt_category_img" name="txt_category_img" >
                </div>

                <div class="form-group">
                  <label>Category Description</label>
                  <input type="textarea" class="form-control" placeholder="Enter text" id="txt_category_desc" name="txt_category_desc" value="<?php echo $row_category->cat_desc;?>">

                </div>


                <div class="form-group">
                  <label>Available</label>
                  <br>
                  <label class="radio-inline">
                    <input type="radio" name="txt_radio_yes" id="txt_radio_yes" value="Yes" checked
                    <?php echo ($row_category->cat_status=='Yes')?'checked':'' ?>>Yes
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="txt_radio_yes" id="radio_no" value="No"
                    <?php echo ($row_category->cat_status=='No')?'checked':'' ?>>No

                  </label>
                </div>





                <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
                <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

              </form>

              <?php
            }

            ?>







          </div>

          <div class="col-lg-12">
            <h2>Category Views <a href="<?php echo base_url('Admin_controller/admin/manage_category'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Category Image</th>
                    <th>Category Descrition</th>
                    <th>Categor Available</th>
                    <th>Category Update Date</th>
                    <th>Delete</th>
                    <th>Update</th>
                  </tr>
                </thead>




                <?php
                $i=0;
                foreach ($categories->result()as $row)
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


                      <td><?php echo $row->cat_id; ?></td>
                      <td><?php echo $row->cat_name; ?></td>
                      <td><img src="<?php echo base_url('img/category_img/').$row->cat_img; ?>" width='100'> </td>
                      <td><?php echo $row->cat_desc; ?></td>
                      <td><?php echo $row->cat_status; ?></td>
                      <td><?php echo $row->cat_update_date; ?></td>
                      <td><a href="<?php echo base_url('Admin_controller/Admin/manage_category/delete/').$row->cat_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                      <td><a href="<?php echo base_url('Admin_controller/Admin/manage_category/edit/').$row->cat_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
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
                frmvalidator.addValidation("txt_category_name","req","Please enter Category Name");
                frmvalidator.addValidation("txt_category_img","req","Please select add the picture");
                frmvalidator.addValidation("txt_category_desc","req","Please Describe the category");
                frmvalidator.addValidation("txt_radio_yes","selone","please select any ");

                </script>

                <!--validation-->

                <!-- jQuery Version 1.11.0 -->
                <?php include_once('admin_footer.php'); ?>
