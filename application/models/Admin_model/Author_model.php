<?php
class author_model extends CI_Model{

  public function author_save($save_data){
    $this->db->insert('tbl_author',$save_data);
  }

  public function author_view(){
    return $this->db->get('tbl_author');
  }

  public function author_delete($author_id){
    $this->db->where('author_id',$author_id);
    $this->db->delete('tbl_author');
  }

  public function author_edit($edit_author_id){
    $this->db->where('author_id',$edit_author_id);
    return $this->db->get('tbl_author');
  }

  public function author_update($id,$data){
    $this->db->where('author_id',$id);
    $this->db->update('tbl_author',$data);
  }




}



?>
