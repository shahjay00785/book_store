<div class="sub-cate">
  <div class=" top-nav rsidebar span_1_of_left">
    <h3 class="cate">Select By College</h3>

    <div class="col-lg-14">
      <b>city</b>
      <select class="form-control"id="select">
        <option value="">------------select city---------------------</option>
        <option value="">------------select city---------------------</option>
        <option value="">------------select city---------------------</option>

      </select>




    </div>
    <div class="col-lg-14">
      <b>college</b>
      <select class="form-control"id="select">
  <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>

      </select>




    </div>

  </div>
  <div class=" top-nav rsidebar span_1_of_left">
    <h3 class="cate">Select By College</h3>

    <div class="col-lg-14">
      <b>Category</b>
      <select class="form-control"id="select">
        <option value="">------------select city---------------------</option>
        <option value="">------------select city---------------------</option>
        <option value="">------------select city---------------------</option>

      </select>




    </div>
    <div class="col-lg-14">
      Subcategory
      <select class="form-control"id="select">
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>

      </select>




    </div>
    <div class="col-lg-14">
      Publisher
      <select class="form-control"id="select">
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>

      </select>




    </div>
    <div class="col-lg-14">
      Semseter
      <select class="form-control"id="select">
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>

      </select>




    </div>
    <div class="col-lg-14">
      Author
      <select class="form-control"id="select">
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>
        <option value="">------------select college---------------------</option>

      </select>




    </div>

  </div>


</div>
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
