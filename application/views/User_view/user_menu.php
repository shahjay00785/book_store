<div class="sub-cate">
  <div class=" top-nav rsidebar span_1_of_left">

    <ul class="menu">
      <h3 class="cate">CATEGORIES</h3>
      <?php $categories=$this->category_model->category_view();
      foreach ($categories->result() as $row_category) {
        ?>
        <li class="item1"><a href="#"><?php echo $row_category->cat_name; ?><img class="arrow-img" src="<?php echo base_url('Assests/User_template/images/arrow1.png'); ?>" alt=""/> </a>
          <ul class="cute">
            <li class="subitem1"><a href="<?php echo base_url('User_Controller/User_product_controller');?>" >Cute Kittens </a></li>
            <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
            <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
          </ul>
        </li>
        <?php
      }
      ?>




      <li>
        <ul class="kid-menu">
          <li><a href="product.html">Tempus pretium</a></li>
          <li ><a href="product.html">Dignissim neque</a></li>
          <li ><a href="product.html">Ornared id aliquet</a></li>
        </ul>
      </li>
      <ul class="kid-menu ">
        <li><a href="product.html">Commodo sit</a></li>
        <li ><a href="product.html">Urna ac tortor sc</a></li>
        <li><a href="product.html">Ornared id aliquet</a></li>
        <li><a href="product.html">Urna ac tortor sc</a></li>
        <li ><a href="product.html">Eget nisi laoreet</a></li>
        <li><a href="product.html">Faciisis ornare</a></li>
        <li class="menu-kid-left"><a href="contact.html">Contact us</a></li>
      </ul>
    </ul>
  </div>
  <!--initiate accordion-->
  <div class=" chain-grid menu-chain">
    <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>
    <div class="grid-chain-bottom chain-watch">
      <span class="actual dolor-left-grid">300$</span>
      <span class="reducedfrom">500$</span>
      <h6><a href="single.html">Lorem ipsum dolor</a></h6>
    </div>
  </div>
  <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
</div>
<div class="clearfix"> </div>
