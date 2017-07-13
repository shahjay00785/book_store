<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
  var xmlhttp=false;
  try{
    xmlhttp=new XMLHttpRequest();
  }
  catch(e)	{
    try{
      xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(e){
      try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
      }
      catch(e){
        xmlhttp=false;
      }
    }
  }

  return xmlhttp;
}

function get_college_books(college_id)
{
  alert(college_id);
  //var searchdata=document.getElementById('txt_google').value;
  var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/get_college_books/'); ?>"+college_id;
  alert(strURL);
  var req = getXMLHTTP();

  if (req) {

    req.onreadystatechange = function() {
      if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {
          document.getElementById('books_div').innerHTML=req.responseText;
        } else {
          alert("There was a problem while using XMLHTTP:\n" + req.statusText);
        }
      }
    }
    req.open("GET", strURL, true);
    req.send(null);

  }
}



</script>


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
            College Book
          </h1>
          <ol class="breadcrumb">
            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('Admin_controller/Admin/manage_dashboard'); ?>">Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-edit"></i> Forms
          </li>
        </ol>
      </div>
      <div class="col-lg-6">

        <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url(); ?>Admin_controller/Admin/college_book/add" enctype="multipart/form-data" class="">

          <div class="form-group">
            <label>Selects College</label>
            <select class="form-control"  name="txt_select_college" onchange="get_college_books(this.value);">
              <option>---Select College----</option>
              <?php
              $colleges=$this->db->get('tbl_college');

              foreach ($colleges->result() as $row_college) {
                ?>
                <option value="<?php echo $row_college->college_id;?>"><?php echo $row_college->college_name; ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label>Selects Books</label>
            <div id="books_div" >
            </div>
          </div>


          <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-default">Submit Button</button>
          <button type="reset"  name="btn_reset" id="btn_reset" class="btn btn-default">Reset Button</button>

        </form>

        <?php
      }
      else
      {

      }
      ?>            <!--validation-->

                    <!-- jQuery Version 1.11.0 -->
                    <?php include_once('admin_footer.php'); ?>
