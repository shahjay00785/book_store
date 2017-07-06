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
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Book name">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Author">

          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Publisher">

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
              $book=$this->book_master_model->book_master_view();
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

            <!--  <tr class="info">
                <td>3</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
-->
  <!--            <tr class="success">
                <td>4</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="danger">
                <td>5</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="warning">
                <td>6</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>  -->
              <tr class="active">
            </tbody>
          </table>

          <div class="row">
            <div class="col-md-3 col-md-offset-4">
              <ul class="pagination pagination-lg">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>

        </div>
