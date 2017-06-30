<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
  <link href="<?php echo base_url('Assests/User_template/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <!--theme-style-->
  <link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--//theme-style-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!--//fonts-->
  <script src="<?php echo base_url('Assests/User_template/js/jquery.min.js');?>"></script>
  <!--script-->
</head>
<body>
  <!--header-->
  <?php
  include_once('user_header.php'); ?>
  <!---->
  <div class="container">
    <div class="women-product">
      <div class=" w_content">
        <div class="women">
          <a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
          <ul class="w_nav">
            <li>Sort : </li>
            <li><a class="active" href="#">popular</a></li> |
            <li><a href="#">new </a></li> |
            <li><a href="#">discount</a></li> |
            <li><a href="#">price: Low High </a></li>
            <div class="clearfix"> </div>
          </ul>
          <div class="clearfix"> </div>
        </div>
      </div>
      <!-- grids_of_4 -->

      <!---- ONE PRODUCT--->

      <?php
      //  $products=$this->book_master_model->book_master_view();
      //  foreach ($products->result() as $row_product) {
      ?>
      <!--  <div class="grid-product">
      <div class="  product-grid">
      <div class="content_box"><a href="single.html">
      <div class="left-grid-view grid-view-left">
      <img src="<?php //echo base_url('img/book_master_img/').$row_product->book_master_img; ?>" class="img-responsive watch-right" alt=""/>
      <div class="mask">
      <div class="info">Quick View</div>
    </div>
  </a>
</div>
<h4><a href="#"><?php //echo $row_product->book_master_name; ?></a></h4>
<p><?php //echo $row_product->book_master_desc; ?></p>
Rs.<?php //echo $row_product->book_master_price; ?>
</div>
</div>
</div>
-->
<?php  //} ?>
<!----ONE PRODUCT END-->


<div class="product-left">
  <?php
  $products=$this->book_master_model->book_master_view();
  foreach ($products->result() as $row_product) {
    ?>


    <div class="col-md-4 chain-grid">
      <a href="single.html"><img class="img-responsive chain" src="<?php echo base_url('img/book_master_img/').$row_product->book_master_img; ?>" alt=" " /></a>
      <span class="star"> </span>
      <div class="grid-chain-bottom">
        <h6><a href="single.html"><?php echo $row_product->book_master_name; ?></a></h6>
        <div class="star-price">
          <div class="dolor-grid">
            <span class="actual">Rs.<?php echo $row_product->book_master_price; ?></span>
            <span class="reducedfrom">400$</span>
            <span class="rating">
              <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
              <label for="rating-input-1-5" class="rating-star1"> </label>
              <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
              <label for="rating-input-1-4" class="rating-star1"> </label>
              <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
              <label for="rating-input-1-3" class="rating-star"> </label>
              <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
              <label for="rating-input-1-2" class="rating-star"> </label>
              <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
              <label for="rating-input-1-1" class="rating-star"> </label>
            </span>
          </div>
          <a class="now-get get-cart" href="#">ADD TO CART</a>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>

    <?php  } ?>
    <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>


</div>



<!---- start menu--->
<?php include('user_menu.php'); ?>


<!----start footer-->
<?php
include_once('user_footer.php');
?>
<!----end footer-->
</body>
</html>
