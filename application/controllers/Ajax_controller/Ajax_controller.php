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
      echo "<option value='".$row_category->cat_id."'>".$row_category->cat_name."</option>";
    }

    public function data(){
      return $this->db->view('tbl_book');
    }

  }

}
