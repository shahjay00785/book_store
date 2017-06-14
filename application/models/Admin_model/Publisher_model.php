<?php
class publisher_model extends CI_Model{

  public function publisher_save($save_data){
    $this->db->insert('tbl_publisher',$save_data);
  }

  public function publisher_view(){
    return $this->db->get('tbl_publisher');
  }

  public function publisher_delete($publisher_id){
    $this->db->where('publisher_id',$publisher_id);
    $this->db->delete('tbl_publisher');
  }

  public function publisher_edit($edit_publisher_id){
    $this->db->where('publisher_id',$edit_publisher_id);
    return $this->db->get('tbl_publisher');
  }

  public function publisher_update($id,$data){
    $this->db->where('publisher_id',$id);
    $this->db->update('tbl_publisher',$data);
  }




}



?>
