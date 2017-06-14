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
      if(!isset($edit_author)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            Author Add
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

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_author/add" enctype="multipart/form-data">

            <div class="form-group">
              <label>author Name</label>
              <input type="text" class="form-control" id="txt_author_name" name="txt_author_name" placeholder="Author Name">
              <div id='myform_txt_author_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>Author Gender</label>
              <br>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_male" id="txt_radio_male" value="male" checked>male
              </label>
              <label class="radio-inline">
                <input type="radio" name="txt_radio_male" id="txt_radio_female" value="female">female
              </label>
            </div>

            <div class="form-group">
              <label>author Email</label>
              <input type="text" class="form-control" id="txt_author_email" name="txt_author_email" placeholder="Author Contact Number">
              <div id='myform_txt_author_email_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>author contact Num</label>
              <input type="text" class="form-control" id="txt_author_contactnum" name="txt_author_contactnum" placeholder="Author Contact Number">
              <div id='myform_txt_author_contactnum_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>author website</label>
              <input type="text" class="form-control" id="txt_author_website" name="txt_author_website" placeholder="Author Website">
              <div id='myform_txt_author_website_errorloc' class="error_strings"></div>
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
              <label>author Description</label>
              <input type="textarea" class="form-control"  rows="3" id="txt_author_desc" name="txt_author_desc" placeholder="Author Desciption">
              <div id='myform_txt_author_desc_errorloc' class="error_strings"></div>
            </div>








            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
          foreach ($authors->result() as  $row_author) {
            //print_r($row_author);
          }
          ?>
          <div class="col-lg-12">
            <h1 class="page-header">
              Author Edit <a href="<?php echo base_url('Admin_controller/admin/manage_author'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a>
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

            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url('Admin_controller/Admin/manage_author/do_update/').$row_author->author_id; ?>" enctype="multipart/form-data">

              <div class="form-group">
                <label>author Name</label>
                <input type="text" class="form-control" id="txt_author_name" name="txt_author_name" placeholder="Author Name" value="<?php echo $row_author->author_name; ?>">
                <div id='myform_txt_author_name_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>Author Gender</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_male" id="txt_radio_male" value="male" checked>male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_male" id="txt_radio_female" value="female">female
                </label>
              </div>

              <div class="form-group">
                <label>Author Email</label>
                <input type="text" class="form-control" id="txt_author_email" name="txt_author_email" placeholder="Author email" value="<?php echo $row_author->author_email; ?>" >
                <div id='myform_txt_author_email_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>author contact Num</label>
                <input type="text" class="form-control" id="txt_author_contactnum" name="txt_author_contactnum" placeholder="Author Contact Number" value="<?php echo $row_author->author_contactnum; ?>">
                <div id='myform_txt_author_contactnum_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>author website</label>
                <input type="text" class="form-control" id="txt_author_website" name="txt_author_website" placeholder="Author Website" value="<?php echo $row_author->author_website; ?>">
                <div id='myform_txt_author_website_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>Available</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_yes" id="radio_yes" value="Yes" checked
                </label>
                <label class="radio-inline">
                  <?php echo ($row_author->author_status=='Yes')?'checked':'' ?>>Yes
                  <input type="radio" name="txt_radio_yes" id="radio_no" value="No"
                  <?php echo ($row_author->author_status=='No')?'checked':'' ?>>No
                </label>
              </div>


              <div class="form-group">
                <label>author Description</label>
                <input type="textarea" class="form-control"  rows="3" id="txt_author_desc" name="txt_author_desc" placeholder="Author Desciption" value="<?php echo $row_author->author_desc; ?>">
                <div id='myform_txt_author_desc_errorloc' class="error_strings"></div>
              </div>








              <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
              <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

            </form>

            <?php
          }

          ?>







        </div>

        <div class="col-lg-12">
          <h2>author Views <a href="<?php echo base_url('Admin_controller/admin/manage_author'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>author Id</th>
                  <th>author Name</th>
                  <th>author Gender</th>
                  <th>author Website</th>
                  <th>author Email</th>
                  <th>author Contact Num</th>
                  <th>author Descrition</th>
                  <th>authoregor Available</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
              </thead>




              <?php
              $i=0;
              foreach ($authors->result()as $row)
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


                    <td><?php echo $row->author_id; ?></td>
                    <td><?php echo $row->author_name; ?></td>
                    <td><?php echo $row->author_gender; ?></td>
                    <td><?php echo $row->author_website; ?></td>
                    <td><?php echo $row->author_email; ?></td>
                    <td><?php echo $row->author_contactnum; ?></td>
                    <td><?php echo $row->author_desc; ?></td>
                    <td><?php echo $row->author_status; ?></td>

                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_author/delete/').$row->author_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_author/edit/').$row->author_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
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
              frmvalidator.addValidation("txt_author_name","req","Please enter author Name");

              frmvalidator.addValidation("txt_author_contactnum","req","Please enter author Contact Number");
              frmvalidator.addValidation("txt_author_website","req","Please enter author Website");
              frmvalidator.addValidation("txt_author_email","req","Please enter author Email");
              frmvalidator.addValidation("txt_author_desc","req","Please Describe the author");
              frmvalidator.addValidation("txt_male","selone","please select any ");

              </script>

              <!--validation-->

              <!-- jQuery Version 1.11.0 -->
              <?php include_once('admin_footer.php'); ?>
