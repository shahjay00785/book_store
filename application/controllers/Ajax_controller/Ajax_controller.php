<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {

  public function index()
  {
    $this->load->view('welcome_message');
  }

  public function getstate($country_id){
    $states=$this->db->get_where('tbl_state',array('country_id' => $country_id));
    //  print_r($states);
    foreach ($states->result() as $row_state) {
      //echo "<option value=1>jay</option>";
      echo "<option value='".$row_state->state_id."'>".$row_state->state_name."</option>";
    }

  }

  public function getcolleges($city_id)
  {
    $colleges=$this->db->get_where('tbl_college',array('city_id'=>$city_id));
    echo "<option>--select any--</option>";
    foreach($colleges->result() as $college_row)
    {
      echo "<option value='".$college_row->college_id."'>".$college_row->college_name."</option>";
    }
  }

  public function getbooks($college_id)
  {
    echo $college_id;
    $i=1;
    $this->db->join('tbl_book_master','tbl_book_master.book_master_id=tbl_college_book.book_master_id');
    $products = $this->db->get_where('tbl_college_book',array('tbl_college_book.college_id'=>$college_id));
    foreach ($products->result() as $row_product) {
      if($i%3==0)
      {
        ?>
        <div class="col-md-4 chain-grid grid-top-chain" style="padding-bottom:20px">

        <?php
      }
      else {
        ?>
        <div class="col-md-4 chain-grid">

        <?php

      }
      $i++;
      ?>



      <a href="<?php echo base_url('User_Controller/User_product_controller/product_full/').$row_product->book_master_id; ?>"><img class="img-responsive chain" src="<?php echo base_url('img/book_master_img/').$row_product->book_master_img; ?>" alt=" " height="100px" width="200px" /></a>
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
            <a class="now-get get-cart" href="<?php echo base_url('User_Controller/User_cart_controller/add_to_cart/').$row_product->book_master_id; ?>">ADD TO CART</a>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>

    <?php } ?>

    <?php
  }

  public function getcity($state_id){
    $city=$this->db->get_where('tbl_city',array('state_id'=> $state_id));
    foreach ($city->result() as $row_city) {
      //echo "<option value=1>jay</option>";
      echo "<option value='".$row_city->city_id."'>".$row_city->city_name."</option>";
    }

  }

  public function getsubcategory($category_id){
    $category=$this->db->get_where('tbl_category',array('cat_parent_id'=> $category_id));
    foreach ($category->result() as $row_category) {
      //echo "<option value=1>jay</option>";
      echo"<option value='".$row_category->cat_id."'>".$row_category->cat_name."</option>";
    }
  }

  public function get_college_books($college_id)
  {
    //echo $college_id;
    ?>
    <label>
      <table><tr>
      <?php $i=1; ?>
      <?php
      $college_books=$this->db->get_where('tbl_college_book',array('college_id'=>$college_id));
      $college_book_array=array();
      foreach($college_books->result() as $college_book_row)
      {
        $college_book_array[]=$college_book_row->book_master_id;
      }


      $books=$this->db->get('tbl_book_master');
      foreach ($books->result() as $row_book) {
        ?>
        <td>
          <?php
          if(in_array($row_book->book_master_id,$college_book_array))
          {
            ?>
            <input type="checkbox" style='margin-left:10px' checked='checked' value="<?php echo $row_book->book_master_id; ?>" name="checkbox_book[]"> <?php echo $row_book->book_master_name ?>

            <?php
          }
          else
          {
            ?>
            <input type="checkbox" style='margin-left:10px' value="<?php echo $row_book->book_master_id; ?>" name="checkbox_book[]"> <?php echo $row_book->book_master_name ?>

            <?php
          }

          ?>
      </td>
        <?php
        if($i%4==0){
          echo "</tr><tr>";
        }
        $i++;
      }
      ?>
    </tr></table>
    </label>
    <?php
  }

  public function getbookdata($data){
    //echo $data;
    $data=trim($data);
    if(strlen($data)>0)
    {
      $datas=$this->db->query("select * from tbl_book_master where book_master_name like '".$data."%'   ");
      foreach ($datas->result() as $row_bookdata) {
        //echo "<option value=1>jay</option>";
        //echo "<option value='".$row_bookdata->book_master_id."'>".$row_bookdata->book_master_name."</option>";
        ?>
        <option value='<?php echo $row_bookdata->book_master_id;?>' onclick="setdata('<?php echo $row_bookdata->book_master_name; ?>')"><?php echo $row_bookdata->book_master_name; ?></option>
        <?php
      }
    }
  }
}
