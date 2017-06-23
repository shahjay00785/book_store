<?php
class category_model extends CI_Model{

  public function category_save($save_data){
    $this->db->insert('tbl_category',$save_data);
  }

  public function category_view(){
    return $this->db->get_where('tbl_category',array("cat_parent_id"=>0));
  }

  public function category_delete($category_id){
    $this->db->where('cat_id',$category_id);
    $this->db->delete('tbl_category');
  }

  public function category_edit($edit_category_id){
    $this->db->where('cat_id',$edit_category_id);
    return $this->db->get('tbl_category');
  }

  public function category_update($id,$data){
    $this->db->where('cat_id',$id);
    $this->db->update('tbl_category',$data);
  }




}



?>
