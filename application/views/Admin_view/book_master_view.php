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
      if(!isset($edit_book_master)){
        ?>
        <div class="col-lg-12">
          <h1 class="page-header">
            book_master Add
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

          <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/manage_book_master/add" enctype="multipart/form-data" class="">

            <div class="form-group">
              <label>book_master Name</label>
              <input type="text" class="form-control" id="txt_book_master_name" name="txt_book_master_name" placeholder="book_master Name">
              <div id='myform_txt_book_master_name_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>


            <div class="form-group">
              <label>Selects category</label>
              <select class="form-control" name="txt_select_category">
                <option>---select category----</option>
                <?php
                $categories=$this->category_model->category_view();
                foreach ($categories->result() as $row_category ) {
                  ?>
                  <option value="<?php echo $row_category->cat_id;?>"><?php echo $row_category->cat_name; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>


            <div class="form-group">
              <label>Book Master Image</label>
              <input type="file" id="txt_book_master_img" name="txt_book_master_img">
              <div id='myform_txt_book_master_img_errorloc' class="error_strings"></div>
            </div>

            <div class="form-group">
              <label>Selects Author</label>
              <select class="form-control"  name="txt_select_author">
                <option>---Select Author----</option>
                <?php
                $authors=$this->author_model->author_view();
                foreach ($authors->result() as $row_author ) {
                  ?>
                  <option value="<?php echo $row_author->author_id;?>"><?php echo $row_author->author_name; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Selects publisher</label>
              <select class="form-control" name="txt_select_publisher">
                <option>---Select Publishers----</option>
                <?php
                $publishers=$this->publisher_model->publisher_view();
                foreach ($publishers->result() as $row_publisher ) {
                  ?>
                  <option value="<?php echo $row_publisher->publisher_id;?>"><?php echo $row_publisher->publisher_name; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>book_master price</label>
              <input type="text" class="form-control" id="txt_book_master_price" name="txt_book_master_price" placeholder="book_master price">
              <div id='myform_txt_book_master_price_errorloc' class="error_strings"></div>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
              <label>book_master ISBN</label>
              <input type="text" class="form-control" id="txt_book_master_isbn" name="txt_book_master_isbn" placeholder="book_master Contact Number">
              <div id='myform_txt_book_master_isbn_errorloc' class="error_strings"></div>
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
              <label>book_master Description</label>
              <input type="textarea" class="form-control"  rows="3" id="txt_book_master_desc" name="txt_book_master_desc" placeholder="book_master Desciption">
              <div id='myform_txt_book_master_desc_errorloc' class="error_strings"></div>
            </div>

            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
            <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

          </form>

          <?php
        }
        else
        {
          foreach ($book_masters->result() as  $row_book_master) {
            //print_r($row_book_master);
          }
          ?>
          <div class="col-lg-12">
            <h1 class="page-header">
              book_master Edit <a href="<?php echo base_url('Admin_controller/admin/manage_book_master'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a>
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

            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url('Admin_controller/Admin/manage_book_master/do_update/').$row_book_master->book_master_id; ?>" enctype="multipart/form-data">

              <div class="form-group">
                <label>book_master Name</label>
                <input type="text" class="form-control" id="txt_book_master_name" name="txt_book_master_name" placeholder="book_master Name"
                value="<?php echo $row_book_master->book_master_name;?>">
                <div id='myform_txt_book_master_name_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>


              <div class="form-group">
                <label>Selects category</label>
                <select class="form-control" name="txt_select_category">
                  <option>---select category----</option>

                  <?php
                  $categories=$this->category_model->category_view();
                  foreach ($categories->result() as $row_category ) {
                    if($row_book_master->cat_id==$row_category->cat_id){
                    ?>
                    <option value="<?php echo $row_category->cat_id;?>" selected="selected"><?php echo $row_category->cat_name; ?></option>
                    <?php
                  }
                  else {
                  ?>
                  <option value="<?php echo $row_category->cat_id;?>"><?php echo $row_category->cat_name; ?></option>
                  <?php } }?>
                </select>
              </div>


              <div class="form-group">
                <label>Book Master Image</label>
                <img src="<?php echo base_url('img/book_master_img/').$row_book_master->book_master_img; ?>" width='100'>
                <input type="file" id="txt_book_master_img" name="txt_book_master_img">
                <div id='myform_txt_book_master_img_errorloc' class="error_strings"></div>
              </div>

              <div class="form-group">
                <label>Selects Author</label>
                <select class="form-control"  name="txt_select_author">
                  <option>---Select Author----</option>
                  <?php
                  $authors=$this->author_model->author_view();
                  foreach ($authors->result() as $row_author ) {
                      if($row_book_master->author_id==$row_author->author_id){
                    ?>
                    <option value="<?php echo $row_author->author_id;?>" selected="selected"><?php echo $row_author->author_name; ?></option>
                    <?php
                  }
                  else {
                  ?>
                  <option value="<?php echo $row_author->author_id;?>" ><?php echo $row_author->author_name; ?></option>
                  <?php }
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Selects publisher</label>
                <select class="form-control" name="txt_select_publisher">
                  <option>---Select Publishers----</option>
                  <?php
                  $publishers=$this->publisher_model->publisher_view();
                  foreach ($publishers->result() as $row_publisher ) {
                    if($row_book_master->publisher_id==$row_publisher->publisher_id){
                    ?>
                    <option value="<?php echo $row_publisher->publisher_id;?>" selected="selected"><?php echo $row_publisher->publisher_name; ?></option>
                    <?php
                  }
                  else {
                  ?>
                  <option value="<?php echo $row_publisher->publisher_id;?>" ><?php echo $row_publisher->publisher_name; ?></option>
                  <?php }
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>book_master price</label>
                <input type="text" class="form-control" id="txt_book_master_price" name="txt_book_master_price" placeholder="book_master price"
                          value="<?php echo $row_book_master->book_master_price;?>">
                <div id='myform_txt_book_master_price_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>book_master ISBN</label>
                <input type="text" class="form-control" id="txt_book_master_isbn" name="txt_book_master_isbn" placeholder="book_master isbn"
                    value="<?php echo $row_book_master->book_master_isbn;?>">
                <div id='myform_txt_book_master_isbn_errorloc' class="error_strings"></div>
                <p class="help-block"></p>
              </div>



              <div class="form-group">
                <label>Available</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_yes" id="radio_yes" value="Yes" checked
                    <?php echo ($row_book_master->book_master_status=='Yes')?'checked':'' ?>>Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="txt_radio_yes" id="radio_no" value="No"
                    <?php echo ($row_book_master->book_master_status=='No')?'checked':'' ?>>No
                </label>
              </div>


              <div class="form-group">
                <label>book_master Description</label>
                <input type="textarea" class="form-control"  rows="3" id="txt_book_master_desc" name="txt_book_master_desc" placeholder="book_master Desciption"
                    value="<?php echo $row_book_master->book_master_desc;?>">
                <div id='myform_txt_book_master_desc_errorloc' class="error_strings"></div>
              </div>

              <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
              <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

            </form>

            <?php
          }

          ?>







        </div>

        <div class="col-lg-12">
          <h2>book_master Views
            <button onclick="myFunction()">Add</button>
        <!--    <a href="<?php //echo base_url('Admin_controller/admin/manage_book_master'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2> -->
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th># Id</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>img</th>
                  <th>isbn</th>
                  <th>Author</th>
                  <th>Publisher </th>
                  <th>Price</th>
                  <th>Available</th>
                  <th>Descrition</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
              </thead>




              <?php
              $i=0;
              foreach ($book_masters->result()as $row)
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


                    <td><?php echo $row->book_master_id; ?></td>
                    <td><?php echo $row->book_master_name; ?></td>

                    <td><?php echo $row->cat_name; ?></td>
                    <td><img src="<?php echo base_url('img/book_master_img/').$row->book_master_img; ?>" width='100'> </td>
                    <td> <?php echo $row->book_master_isbn; ?> </td>
                    <td> <?php echo $row->author_name; ?> </td>
                    <td> <?php echo $row->publisher_name; ?> </td>
                    <td><?php echo $row->book_master_price; ?></td>
                    <td><?php echo $row->book_master_status; ?></td>
                    <td><?php echo $row->book_master_desc; ?></td>


                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_book_master/delete/').$row->book_master_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>
                    <td><a href="<?php echo base_url('Admin_controller/Admin/manage_book_master/edit/').$row->book_master_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/update.png'); ?>" width="50px" height="50px"></a> </td>
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
              frmvalidator.addValidation("txt_book_master_name","req","Please enter book_master Name");

              frmvalidator.addValidation("txt_book_master_contactnum","req","Please enter book_master Contact Number");
              frmvalidator.addValidation("txt_book_master_website","req","Please enter book_master Website");
              frmvalidator.addValidation("txt_book_master_email","req","Please enter book_master Email");
              frmvalidator.addValidation("txt_book_master_desc","req","Please Describe the book_master");
              frmvalidator.addValidation("txt_radio_male","selone","please select any ");

              </script>

              <!--validation-->

              <!-- jQuery Version 1.11.0 -->
              <?php include_once('admin_footer.php'); ?>
