<div class="sub-cate">
  <div class=" top-nav rsidebar span_1_of_left">
    <h3 class="cate">CATEGORIES</h3>
    <ul class="menu">


      <?php $categories=$this->category_model->category_view();

      foreach ($categories->result() as $row_category) {
        ?>

        <li class="item1"><a href="#"><?php echo $row_category->cat_name; ?><img class="arrow-img" src="<?php echo base_url('Assests/User_template/images/arrow1.png'); ?>" alt=""/> </a>
          <ul class="cute">
            <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
            <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
            <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
          </ul>
        </li>


        <?php
      }
      ?>

      <!--    <ul class="cute">
      <li class="subitem1"><a href="product.html">abc </a></li>
      <li class="subitem2"><a href="product.html">asds </a></li>
      <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
    </ul>
  </li>
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
-->
