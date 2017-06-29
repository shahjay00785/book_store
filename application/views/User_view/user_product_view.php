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
  <div class="header">
    <div class="top-header">
      <div class="container">
        <div class="top-header-left">
          <ul class="support">
            <li><a href="#"><label> </label></a></li>
            <li><a href="#">24x7 live<span class="live"> support</span></a></li>
          </ul>
          <ul class="support">
            <li class="van"><a href="#"><label> </label></a></li>
            <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="top-header-right">
          <div class="down-top">
            <select class="in-drop">
              <option value="English" class="in-of">English</option>
              <option value="Japanese" class="in-of">Japanese</option>
              <option value="French" class="in-of">French</option>
              <option value="German" class="in-of">German</option>
            </select>
          </div>
          <div class="down-top top-down">
            <select class="in-drop">

              <option value="Dollar" class="in-of">Dollar</option>
              <option value="Yen" class="in-of">Yen</option>
              <option value="Euro" class="in-of">Euro</option>
            </select>
          </div>
          <!---->
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="bottom-header">
      <div class="container">
        <div class="header-bottom-left">
          <div class="logo">
            <a href="<?php echo base_url('User_Controller/user_home_controller'); ?>"><img src="<?php echo base_url('Assests/User_template/images/logo.png'); ?>" alt=" " /></a>
          </div>
          <div class="search">
            <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <input type="submit"  value="SEARCH">

          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="header-bottom-right">
          <div class="account"><a href="<?php echo base_url('User_Controller/user_login_controller'); ?>"><span> </span>YOUR ACCOUNT</a></div>
          <ul class="login">
            <li><a href="<?php echo base_url('User_Controller/user_login_controller'); ?>"><span> </span>LOGIN</a></li> |
            <li ><a href="<?php echo base_url('User_Controller/user_singup_controller'); ?>">SIGNUP</a></li>
          </ul>
          <div class="cart"><a href="#"><span> </span>CART</a></div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
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
      $products=$this->book_master_model->book_master_view();
      foreach ($products->result() as $row_product) {
      ?>
      <div class="grid-product">
        <div class="  product-grid">
          <div class="content_box"><a href="single.html">
            <div class="left-grid-view grid-view-left">
              <img src="<?php echo base_url('img/book_master_img/').$row_product->book_master_img; ?>" class="img-responsive watch-right" alt=""/>
              <div class="mask">
                <div class="info">Quick View</div>
              </div>
            </a>
          </div>
          <h4><a href="#"> Duis autem</a></h4>
          <p>It is a long established fact that a reader</p>
          Rs. 499
        </div>
      </div>
    </div>
    <?php  } ?>
    <!----ONE PRODUCT END-->

  </div>




  <!---- start menu--->

  <div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
      <h3 class="cate">CATEGORIES</h3>
      <ul class="menu">
        <?php $categories=$this->category_model->category_view();
        foreach ($categories->result() as $row_category) {
          if($row_category->cat_parent_id==0){
            ?>

            <li class="item1">

              <a href="#"><?php echo $row_category->cat_name; ?><img class="arrow-img" src="<?php echo base_url('Assests/User_template/images/arrow1.png'); ?>" alt=""/> </a>


              <?php
              $parent_res=$this->db->get_where('tbl_category',array('cat_parent_id'=>$row_category->cat_id) );
              //echo $parent_res->num_rows();
              if($parent_res->num_rows()>0){
                ?>
                <ul class="cute">
                  <?php foreach ($parent_res->result() as $row_sub_cat) {
                    ?>
                    <li class="subitem1">

                      <a href="<?php echo base_url('User_Controller/User_product_controller/product_by_subcat/').$row_sub_cat->cat_id;?>" ><?php echo $row_sub_cat->cat_name; ?> </a></li>

                      <?php
                    }
                    ?>
                  </ul>
                  <?php
                }

                ?>

                <!---
              -->
            </li>
            <?php
          }
          ?>

          <?php
        }
        ?>

        <div class=" top-nav rsidebar span_1_of_left">
          <h3 class="cate">Search</h3>
          <ul class="cute">
            <li class="menu-kid-left"><a href="#"><select class="" name="">
              <option value="">---select city---</option>
            </select></a></li>
            <li class="menu-kid-left"><a href="#"><select class="" name="">
              <option value="">---select college---</option>
              <option value="">---select college---</option>
              <option value="">---select college---</option>
            </select></a></li>
            <li class="menu-kid-left"><a href="#"><select class="select1" name="">
              <option value="">---select semester---</option>
            </select> </a> </li>

          </ul>
        </ul>
      </div>
      <!--initiate javascript for menu-->
      <script type="text/javascript">
      $(function() {
        var menu_ul = $('.menu > li > ul'),
        menu_a  = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
          } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
          }
        });

      });
      </script>
      <!--endof javascript men-->

    </div>
    <!--end menu-->
    <div class="clearfix"> </div>
  </div>


  <!----start footer-->
  <div class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="latter">
          <h6>NEWS-LETTER</h6>
          <div class="sub-left-right">
            <form>
              <input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
              <input type="submit" value="SUBSCRIBE" />
            </form>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="latter-right">
          <p>FOLLOW US</p>
          <ul class="face-in-to">
            <li><a href="#"><span> </span></a></li>
            <li><a href="#"><span class="facebook-in"> </span></a></li>
            <div class="clearfix"> </div>
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-cate">
          <h6>CATEGORIES</h6>
          <ul>
            <li><a href="#">Curabitur sapien</a></li>
            <li><a href="#">Dignissim purus</a></li>
            <li><a href="#">Tempus pretium</a></li>
            <li ><a href="#">Dignissim neque</a></li>
            <li ><a href="#">Ornared id aliquet</a></li>
            <li><a href="#">Ultrices id du</a></li>
            <li><a href="#">Commodo sit</a></li>
            <li ><a href="#">Urna ac tortor sc</a></li>
            <li><a href="#">Ornared id aliquet</a></li>
            <li><a href="#">Urna ac tortor sc</a></li>
            <li ><a href="#">Eget nisi laoreet</a></li>
            <li ><a href="#">Faciisis ornare</a></li>
          </ul>
        </div>
        <div class="footer-bottom-cate bottom-grid-cat">
          <h6>FEATURE PROJECTS</h6>
          <ul>
            <li><a href="#">Curabitur sapien</a></li>
            <li><a href="#">Dignissim purus</a></li>
            <li><a href="#">Tempus pretium</a></li>
            <li ><a href="#">Dignissim neque</a></li>
            <li ><a href="#">Ornared id aliquet</a></li>
            <li><a href="#">Ultrices id du</a></li>
            <li><a href="#">Commodo sit</a></li>
          </ul>
        </div>
        <div class="footer-bottom-cate">
          <h6>TOP BRANDS</h6>
          <ul>
            <li><a href="#">Curabitur sapien</a></li>
            <li><a href="#">Dignissim purus</a></li>
            <li><a href="#">Tempus pretium</a></li>
            <li ><a href="#">Dignissim neque</a></li>
            <li ><a href="#">Ornared id aliquet</a></li>
            <li><a href="#">Ultrices id du</a></li>
            <li><a href="#">Commodo sit</a></li>
            <li ><a href="#">Urna ac tortor sc</a></li>
            <li><a href="#">Ornared id aliquet</a></li>
            <li><a href="#">Urna ac tortor sc</a></li>
            <li ><a href="#">Eget nisi laoreet</a></li>
            <li ><a href="#">Faciisis ornare</a></li>
          </ul>
        </div>
        <div class="footer-bottom-cate cate-bottom">
          <h6>OUR ADDERSS</h6>
          <ul>
            <li>Aliquam metus  dui. </li>
            <li>orci, ornareidquet</li>
            <li> ut,DUI.</li>
            <li >nisi, dignissim</li>
            <li >gravida at.</li>
            <li class="phone">PH : 6985792466</li>
            <li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!----end footer-->
</body>
</html>
