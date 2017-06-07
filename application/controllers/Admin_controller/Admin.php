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
			$data['author_name']=$this->input->post('txt_author_name');
			$data['author_desc']=$this->input->post('txt_author_desc');
			$data['author_gender']=$this->input->post('radio_sex');
			$data['author_contactnum']=$this->input->post('txt_author_contactnum');
			$data['author_email']=$this->input->post('txt_author_email');
			$data['author_status']=$this->input->post('txt_author_status');
			$this->db->insert('tbl_author',$data);
			redirect('Admin_controller/Admin/mange_author');
		}
		if($parameter1=="delete"){
			$this->db->where('author_id',$parameter2);
			$this->db->delete('tbl_author');
			redirect('Admin_controller/Admin/mange_author');
		}
		if($parameter1=="edit"){
			$this->db->where('author_id',$parameter2);
			$author_data['edit_authors']=$this->db->get('tbl_author');

		}
		if($parameter1=="do_update"){
			$update_data['author_desc']=$this->input->post('txt_author_desc');
			$update_data['author_name']=$this->input->post('txt_author_name');
			$update_data['author_gender']=$this->input->post('radio_sex');
			$update_data['author_contactnum']=$this->input->post('txt_author_contactnum');
			$update_data['author_email']=$this->input->post('txt_author_email');
			$update_data['author_status']=$this->input->post('txt_author_status');
			$this->db->where('author_id',$parameter2);
			$this->db->update('tbl_author',$update_data);
			redirect('Admin_controller/Admin/mange_author');
		}
		$author_data['authors']=$this->db->get('tbl_author');
		$this->load->view('admin_view/author_view',$author_data);
	}

	public function mange_publication($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['pub_name']=$this->input->post('txt_publication_name');
			$data['pub_desc']=$this->input->post('txt_publication_desc');
			$data['pub_website']=$this->input->post('txt_publication_website');
			$data['pub_contactnum']=$this->input->post('txt_publication_contactnum');
			$data['pub_email']=$this->input->post('txt_publication_email');
			$data['pub_status']=$this->input->post('txt_publication_status');
			$this->db->insert('tbl_publisher',$data);
			redirect('Admin_controller/Admin/mange_publication');
		}
		if($parameter1=="delete"){
			$this->db->where('pub_id',$parameter2);
			$this->db->delete('tbl_publisher');
			redirect('Admin_controller/Admin/mange_publication');
		}
		if($parameter1=="edit"){
			$this->db->where('pub_id',$parameter2);
			$publication_data['edit_publications']=$this->db->get('tbl_publisher');

		}
		if($parameter1=="do_update"){
			$update_data['pub_desc']=$this->input->post('txt_publication_desc');
			$update_data['pub_name']=$this->input->post('txt_publication_name');
			$update_data['pub_website']=$this->input->post('txt_publication_website');
			$update_data['pub_contactnum']=$this->input->post('txt_publication_contactnum');
			$update_data['pub_email']=$this->input->post('txt_publication_email');
			$update_data['pub_status']=$this->input->post('txt_publication_status');
			$this->db->where('pub_id',$parameter2);
			$this->db->update('tbl_publisher',$update_data);
			redirect('Admin_controller/Admin/mange_publication');
		}
		$publication_data['publications']=$this->db->get('tbl_publisher');
		$this->load->view('admin_view/publication_view',$publication_data);
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

	public function mange_country($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['country_code']=$this->input->post('txt_country_code');
			$data['country_name']=$this->input->post('txt_country_name');
			$this->db->insert('tbl_country',$data);
			redirect('Admin_controller/Admin/mange_country');
		}
		if($parameter1=="delete"){
			$this->db->where('country_id',$parameter2);
			$this->db->delete('tbl_country');
			redirect('Admin_controller/Admin/mange_country');
		}
		if($parameter1=="edit"){
			$this->db->where('country_id',$parameter2);
			$country_data['edit_countries']=$this->db->get('tbl_country');
		}
		if($parameter1=="do_update"){
			$update_data['country_code']=$this->input->post('txt_country_code');
			$update_data['country_name']=$this->input->post('txt_country_name');
			$this->db->where('country_id',$parameter2);
			$this->db->update('tbl_country',$update_data);
			redirect('Admin_controller/Admin/mange_country');
		}
		$country_data['countries']=$this->db->get('tbl_country');
		$this->load->view('admin_view/country_view',$country_data);
	}

}
