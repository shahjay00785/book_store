<?php
class user_model extends CI_Model{

  public function user_save($save_data){
    $this->db->insert('tbl_user',$save_data);
  }

  public function user_view(){
    return $this->db->get('tbl_user');
  }

  public function user_delete($user_id){
    $this->db->where('user_id',$user_id);
    $this->db->delete('tbl_user');
  }

  public function user_edit($edit_user_id){
    $this->db->where('user_id',$edit_user_id);
    return $this->db->get('tbl_user');
  }

  public function user_update($id,$data){
    $this->db->where('user_id',$id);
    $this->db->update('tbl_user',$data);
  }




}



?>
