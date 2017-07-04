<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cart_controller extends CI_Controller {

	public function index()
	{
    echo "User cart";
    //$this->load->view('User_view/User_cart_view');
	}

	public function add_to_cart($id){
			$cart_data['product_id']=$id;
			$session_id=session_id();
			$cart_data['session_id']=session_id();
			$cart_data['product_qty']="1";
			$count=$this->db->get_where('tbl_cart',array('session_id'=>$session_id,'product_id'=>$id));
			foreach ($count->result() as $count_q) {
				$qty=$count_q->product_qty;
			}
			if($count->num_rows()>0){
				$this->db->where('product_id',$id);
				$this->db->update('tbl_cart',array('product_qty' =>$qty+1));
			}
			else {
			 $this->db->insert('tbl_cart',$cart_data);
			}




		 //redirect(base_url().'User_Controller/User_product_controller');
		 redirect($_SERVER["HTTP_REFERER"]);
	}
}
