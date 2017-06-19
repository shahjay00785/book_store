<?php
class admin_login_model extends CI_Model{

  public function check($username,$password){
    $q=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");
    $result=$q->$result_array();

    if($q->num_rows()){
      return $q->row()->id;
    }

  }




}



?>
