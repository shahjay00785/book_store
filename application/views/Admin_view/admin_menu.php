<div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav side-nav">
    <li class="active">
      <a href="<?php echo base_url('Admin_controller/Admin/manage_dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>



    <!------ Menu------>

    <li>
      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Forms <i class="fa fa-fw fa-caret-down"></i></a>
      <ul id="demo" class="collapse">
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_category'); ?>">Category</a>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_book_master'); ?>">Book</a>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_author'); ?>">Autor</a>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_publisher'); ?>">Publisher</a>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_college'); ?>">Colleges</a>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_controller/Admin/manage_user'); ?>">User</a>
          <li>
            <a href="<?php echo base_url('Admin_controller/Admin/college_book'); ?>">Colleges Book</a>
          </ul>
        </li>
        <li>

          <li class="">
            <a href="<?php echo base_url('Admin_controller/Admin/search_bar'); ?>"><i class="fa fa-fw fa-dashboard"></i>Search</a>
          </li>
          <!---Menu---->


        </ul>
      </div>
