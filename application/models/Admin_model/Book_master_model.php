<?php
class book_master_model extends CI_Model{

  public function book_master_save($save_data){
    $this->db->insert('tbl_book_master',$save_data);
  }

  public function book_master_view(){
    $this->db->join('tbl_author','tbl_author.author_id=tbl_book_master.author_id');
    $this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
    $this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
    return $this->db->get('tbl_book_master');
  }

  public function book_master_delete($book_master_id){
    $this->db->where('book_master_id',$book_master_id);
    $this->db->delete('tbl_book_master');
  }

  public function book_master_edit($edit_book_master_id){
    $this->db->where('book_master_id',$edit_book_master_id);
    return $this->db->get('tbl_book_master');
  }

  public function book_master_update($id,$data){
    $this->db->where('book_master_id',$id);
    $this->db->update('tbl_book_master',$data);
  }




}



?>
