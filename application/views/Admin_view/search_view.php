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

	function getdata()
	{

		var searchdata=document.getElementById('txt_book_master_name').value;
		if(searchdata!="")
		{
	    var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getbookdata/'); ?>"+searchdata;
			//var strURL="googlesearch.php?data="+searchdata;
	    //alert(strURL);
			var req = getXMLHTTP();

			if (req) {


				req.onreadystatechange = function() {
					if (req.readyState == 4) {
						// only if "OK"
						if (req.status == 200) {
							document.getElementById('mydiv').innerHTML=req.responseText;

						} else {
							alert("There was a problem while using XMLHTTP:\n" + req.statusText);
						}
					}
				}
				req.open("GET", strURL, true);
				req.send(null);

			}
		}
		else {
			document.getElementById('mydiv').innerHTML="";

		}
	}

	function setdata(text)
	{
		document.getElementById('txt_book_master_name').value=text;
		document.getElementById('mydiv').innerHTML="";
	}

</script>


<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php  include_once('admin_header.php'); ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include_once('admin_menu.php'); ?>
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

    <div class="container-fluid">

      <div class="col-lg-12">
        <h1 class="page-header">
          Search Bar
        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
          </li>

        </ol>
      </div>


        <div class="col-xs-12">
        <form class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Book Name</label>
            <input type="text" autocomplete="off" class="form-control" id="txt_book_master_name" name="txt_book_master_name" onkeyup="getdata();" placeholder="Book name">

						<div id="mydiv" style="display:block;position:absolute;background-color:black;color:white">

						</div>

          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Author Name</label>
            <input type="text"  class="form-control" id="txt_author_name" name="txt_author_name" onkeyup="getauthordata();" placeholder="Author Name">
						<div id="mydiv">

						</div>

          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Publisher Name</label>
            <input type="text" class="form-control" id="txt_publisher_name" name="txt_publisher_name" onkeyup="getpublisherdata();" placeholder="Publisher Name">
						<div id="mydiv">

						</div>

          </div>

          <button type="submit" class="btn btn-default">Search</button>
        </form>
      </div>




          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Book Name</th>
                <th>Image</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Price</th>
                <th>Avalible</th>
              </tr>
            </thead>
            <tbody>
            <?php
            //  $book=$this->book_master_model->book_master_view();
              $i=1;
              foreach ($book->result() as $row_book) {

              if($i%2==0) {
              ?>
              <tr>
                <?php
            }
            else{
              ?>

            <tr class="info">
              <?php
            }
              ?>




                <td><?php echo $i; ?></td>
                <td><?php echo $row_book->book_master_name; ?></td>
                <td><img src="<?php echo base_url('img/book_master_img/').$row_book->book_master_img; ?>" width='100'></td>
                <td><?php echo $row_book->book_master_isbn; ?></td>
                <td><?php echo $row_book->author_name; ?></td>
                <td><?php echo $row_book->publisher_name; ?></td>
                <td><?php echo $row_book->book_master_price; ?></td>
                <td>
                <a href="<?php echo base_url('Admin_controller/Admin/book_activity/').$row_book->book_master_id; ?>">
                <button type="button" class="btn btn-primary btn-sm" ><?php echo $row_book->book_master_status; ?></button>
                </a></td>
              </tr>


              <?php
              $i++;
            }?>


              <tr class="active">
            </tbody>
          </table>

          <div class="row">
            <div class="col-md-3 col-md-offset-4">
							<ul class="pagination pagination-lg">
								<!--
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
							-->
							<?php echo $paging_string; ?>
              
              </ul>
            </div>
          </div>

        </div>
