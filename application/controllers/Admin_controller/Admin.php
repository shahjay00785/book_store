<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		echo "hello";

	}

	public function mange_category($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['cat_name']=$this->input->post('txt_cat_name');
			$data['cat_desc']=$this->input->post('txt_cat_desc');
			$data['cat_img']="img";
			$data['cat_status']=$this->input->post('txt_cat_status');
			$data['cat_update_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_category',$data);
			redirect('Admin_controller/Admin/mange_category');

		}
		if($parameter1=="delete"){
			$this->db->where('cat_id',$parameter2);
			$this->db->delete('tbl_category');
			redirect('Admin_controller/Admin/mange_category');
		}
		if($parameter1=="edit"){
			$this->db->where('cat_id',$parameter2);
			$category_data['edit_categories']=$this->db->get('tbl_category');

		}
		if($parameter1=="do_update"){
			$update_data['cat_name']=$this->input->post('txt_cat_name');
			$update_data['cat_desc']=$this->input->post('txt_cat_desc');
			$update_data['cat_img']="img";
			$update_data['cat_status']=$this->input->post('txt_cat_status');
			$update_data['cat_update_date']=date('Y-m-d H:i:s');
		  $this->db->where('cat_id',$parameter2);
			$this->db->update('tbl_category',$update_data);
			redirect('Admin_controller/Admin/mange_category');
		}

		$category_data['categories']=$this->db->get('tbl_category');
		$this->load->view('admin_view/category_view',$category_data);

	}


	public function mange_author($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_publication($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_book_master($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_college($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_semster($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_user($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function mange_oreder($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){


		}
	}

}
