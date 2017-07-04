<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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

    <div>

      <div>
        <div>
          <h3>Cart Details</h3>
          <table class="table table-bordered" style="width:1000px;width:">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Qty</th>
                <th>M.R.P</th>
                <th>Price</th>
              </tr>
            </thead>

            <?php
            $s_id=session_id();
            $this->db->join('tbl_book_master','tbl_book_master.book_master_id=tbl_cart.product_id');
            $p=$this->db->get_where('tbl_cart',array('session_id' => $s_id));

            $total=0;
            foreach ($p->result() as $row_product) {
              $price=$row_product->book_master_price*$row_product->product_qty;
            ?>
            <tbody>
              <tr>
                <td><img src="<?php echo base_url('img/book_master_img/').$row_product->book_master_img;  ?>" height="100px" weight="100px" ></td>
                <td><?php echo $row_product->book_master_name; ?></td>
                <td><?php echo $row_product->product_qty; ?></td>
                <td><?php echo $row_product->book_master_price ?></td>
                <td><?php echo  $price; ?></td>
              </tr>
          </tbody>


            <?php
            $total=$total+$price;
            }

            ?>
            <tr>
              <td colspan="4">Total</td>
              <td><?php echo $total; ?></td>
            </tr>


          </table>
        </center>



        <center>
           <a href="<?php echo base_url('User_Controller/user_account_controller/add_user'); ?>" class="btn btn-primary btn-lg">Pay Now</a>
        </center>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>



  <!-- footer-->
  <?php include_once('user_footer.php'); ?>
  <!-- footer-->
</div>
</body>
</html>
