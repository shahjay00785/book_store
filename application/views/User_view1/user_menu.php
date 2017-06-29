<div class="sub-cate">
  <div class=" top-nav rsidebar span_1_of_left">

    <ul class="menu">
      <h3 class="cate">CATEGORIES</h3>
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




      <!--    <li>
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
-->
</ul>

</div>
<!--initiate accordion-->

<a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
</div>




<div class="sub-cate">
  <ul class="menu">
    <h3 class="cate">Search By</h3>
    <ul class="kid-menu">
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

<div class="clearfix"> </div>
