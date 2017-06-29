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
    <!--initiate accordion-->
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

  </div>
  <div class="clearfix"> </div>
</div>
