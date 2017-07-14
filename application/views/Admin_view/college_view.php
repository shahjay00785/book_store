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
      if(!isset($edit_college)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            College Add
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

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_college/add" enctype="multipart/form-data">

            <div class="form-group">
              <label>college Name</label>
              <input  autocomplete="off" type="text" class="form-control" id="txt_college_name" name="txt_college_name" placeholder="college Name">
              <div id='myform_txt_college_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>Selects city</label>
              <select class="form-control"  name="txt_select_city"W>
                <option>---Select city----</option>
                <?php
                $citys=$this->db->get('tbl_city');

                foreach ($citys->result() as $row_city) {
                  ?>
                  <option value="<?php echo $row_city->city_id;?>"><?php echo $row_city->city_name; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>






            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
        }
        ?>


        <div class="col-lg-12">
          <h2>College Views <a href="<?php echo base_url('Admin_controller/admin/manage_college'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>college Id</th>
                  <th>college Name</th>
                  <th>CityName</th>

                  <th>Delete</th>
                  <th>Update</th>
                </tr>
              </thead>




              <?php
              $i=0;
              foreach ($college_data->result()as $row)
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


                    <td><?php echo $row->college_id; ?></td>
                    <td><?php echo $row->college_name; ?></td>
                        <td><?php echo $row->city_name; ?></td>

                      <!--    <td><img src="<?php //echo base_url('img/college_img/').$row->college_img; ?>" width='100'> </td> -->


                      <td><a href="<?php echo base_url('Admin_controller/Admin/manage_college/delete/').$row->college_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                      <td><a href="<?php echo base_url('Admin_controller/Admin/manage_college/edit/').$row->college_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
                    </tr>


                    <?php
                  }
                  ?>
                </div>






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
              frmvalidator.addValidation("txt_college_name","req","Please enter college Name");
              frmvalidator.addValidation("txt_college_imga","req","Please select add the picture");
              frmvalidator.addValidation("txt_college_desc","req","Please Describe the college");
              frmvalidator.addValidation("txt_radio_yes","selone","please select any ");

              </script>

              <!--validation-->

              <!-- jQuery Version 1.11.0 -->
              <?php include_once('admin_footer.php'); ?>
