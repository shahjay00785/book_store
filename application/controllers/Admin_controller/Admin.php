<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		echo "hello";

	}

	public function manage_category($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['cat_name']=$this->input->post('txt_cat_name');
			$data['cat_desc']=$this->input->post('txt_cat_desc');
			$data['cat_img']="img";
			$data['cat_status']=$this->input->post('txt_cat_status');
			$data['cat_update_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_category',$data);
			redirect('Admin_controller/Admin/manage_category');

		}
		if($parameter1=="delete"){
			$this->db->where('cat_id',$parameter2);
			$this->db->delete('tbl_category');
			redirect('Admin_controller/Admin/manage_category');
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
			redirect('Admin_controller/Admin/manage_category');
		}

		$category_data['categories']=$this->db->get('tbl_category');
		$this->load->view('admin_view/category_view',$category_data);

	}


	public function manage_author($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['author_name']=$this->input->post('txt_author_name');
			$data['author_desc']=$this->input->post('txt_author_desc');
			$data['author_gender']=$this->input->post('radio_sex');
			$data['author_contactnum']=$this->input->post('txt_author_contactnum');
			$data['author_email']=$this->input->post('txt_author_email');
			$data['author_status']=$this->input->post('txt_author_status');
			$this->db->insert('tbl_author',$data);
			redirect('Admin_controller/Admin/manage_author');
		}
		if($parameter1=="delete"){
			$this->db->where('author_id',$parameter2);
			$this->db->delete('tbl_author');
			redirect('Admin_controller/Admin/manage_author');
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
			redirect('Admin_controller/Admin/manage_author');
		}
		$author_data['authors']=$this->db->get('tbl_author');
		$this->load->view('admin_view/author_view',$author_data);
	}

	public function manage_publication($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['pub_name']=$this->input->post('txt_publication_name');
			$data['pub_desc']=$this->input->post('txt_publication_desc');
			$data['pub_website']=$this->input->post('txt_publication_website');
			$data['pub_contactnum']=$this->input->post('txt_publication_contactnum');
			$data['pub_email']=$this->input->post('txt_publication_email');
			$data['pub_status']=$this->input->post('txt_publication_status');
			$this->db->insert('tbl_publisher',$data);
			redirect('Admin_controller/Admin/manage_publication');
		}
		if($parameter1=="delete"){
			$this->db->where('pub_id',$parameter2);
			$this->db->delete('tbl_publisher');
			redirect('Admin_controller/Admin/manage_publication');
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
			redirect('Admin_controller/Admin/manage_publication');
		}
		$publication_data['publications']=$this->db->get('tbl_publisher');
		$this->load->view('admin_view/publication_view',$publication_data);
	}

	public function manage_college($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['college_name']=$this->input->post('txt_college_name');
			$data['college_desc']=$this->input->post('txt_college_desc');
			$data['college_contactnum']=$this->input->post('txt_college_contactnum');
			$data['college_address']=$this->input->post('txt_college_address');
			$data['college_website']=$this->input->post('txt_college_website');
			$data['city_id']=$this->input->post('select_city');
			$this->db->insert('tbl_college',$data);
			redirect('Admin_controller/Admin/manage_college');
		}
		if($parameter1=="delete"){
			$this->db->where('college_id',$parameter2);
			$this->db->delete('tbl_college');
			redirect('Admin_controller/Admin/manage_college');
		}
		if($parameter1=="edit"){
			$this->db->where('college_id',$parameter2);
			$college_data['edit_colleges']=$this->db->get('tbl_college');

		}
		if($parameter1=="do_update"){
			$update_data['college_name']=$this->input->post('txt_college_name');
			$update_data['college_desc']=$this->input->post('txt_college_desc');
			$update_data['college_contactnum']=$this->input->post('txt_college_contactnum');
			$update_data['college_address']=$this->input->post('txt_college_address');
			$update_data['college_website']=$this->input->post('txt_college_website');
			$update_data['city_id']=$this->input->post('select_city');
			$this->db->where('college_id',$parameter2);
			$this->db->update('tbl_college',$update_data);
			redirect('Admin_controller/Admin/manage_college');
		}
		$college_data['colleges']=$this->db->get('tbl_college');
		$this->load->view('admin_view/college_view',$college_data);
	}



	public function manage_semster($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}

	public function manage_user($parameter1="",$parameter2=""){
		if($parameter1=="add"){

		}
		if($parameter1=="delete"){

		}
		if($parameter1=="edit"){

		}
		if($parameter1=="do_update"){

		}
	}



	public function manage_country($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['country_code']=$this->input->post('txt_country_code');
			$data['country_name']=$this->input->post('txt_country_name');
			$this->db->insert('tbl_country',$data);
			redirect('Admin_controller/Admin/manage_country');
		}
		if($parameter1=="delete"){
			$this->db->where('country_id',$parameter2);
			$this->db->delete('tbl_country');
			redirect('Admin_controller/Admin/manage_country');
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
			redirect('Admin_controller/Admin/manage_country');
		}
		$country_data['countries']=$this->db->get('tbl_country');
		$this->load->view('admin_view/country_view',$country_data);
	}

	public function manage_state($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['state_code']=$this->input->post('txt_state_code');
			$data['state_name']=$this->input->post('txt_state_name');
			$data['country_id']=$this->input->post('select_country');
			$this->db->insert('tbl_state',$data);
			redirect('Admin_controller/Admin/manage_state');
		}
		if($parameter1=="delete"){
			$this->db->where('state_id',$parameter2);
			$this->db->delete('tbl_state');
			redirect('Admin_controller/Admin/manage_state');
		}
		if($parameter1=="edit"){
			$this->db->where('state_id',$parameter2);
			$state_data['edit_states']=$this->db->get('tbl_state');
		}
		if($parameter1=="do_update"){
			$update_data['state_code']=$this->input->post('txt_state_code');
			$update_data['state_name']=$this->input->post('txt_state_name');
			$update_data['country_id']=$this->input->post('select_country');
			$this->db->where('state_id',$parameter2);
			$this->db->update('tbl_state',$update_data);
			redirect('Admin_controller/Admin/manage_state');
		}

		//$this->db->join('tbl_state');
		$this->db->join('tbl_country','tbl_country.country_id=tbl_state.country_id');
		$state_data['states']=$this->db->get('tbl_state');

		$this->load->view('admin_view/state_view',$state_data);
	}

	public function manage_city($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['city_code']=$this->input->post('txt_city_code');
			$data['city_name']=$this->input->post('txt_city_name');
			$data['state_id']=$this->input->post('select_state');
			$this->db->insert('tbl_city',$data);
			redirect('Admin_controller/Admin/manage_city');
		}
		if($parameter1=="delete"){
			$this->db->where('city_id',$parameter2);
			$this->db->delete('tbl_city');
			redirect('Admin_controller/Admin/manage_city');
		}
		if($parameter1=="edit"){
			$this->db->where('city_id',$parameter2);
			$city_data['edit_cities']=$this->db->get('tbl_city');
		}
		if($parameter1=="do_update"){
			$update_data['city_code']=$this->input->post('txt_city_code');
			$update_data['city_name']=$this->input->post('txt_city_name');
			$update_data['state_id']=$this->input->post('select_state');
			$this->db->where('city_id',$parameter2);
			$this->db->update('tbl_city',$update_data);
			redirect('Admin_controller/Admin/manage_city');
		}

		$city_data['cities']=$this->db->get('tbl_city');
		$this->load->view('admin_view/city_view',$city_data);
	}
	public function manage_book_status($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['book_status_code']=$this->input->post('txt_status_code');
			$data['book_status_name']=$this->input->post('txt_status_name');
			$this->db->insert('tbl_book_status',$data);
			redirect('Admin_controller/Admin/manage_book_status');
		}
		if($parameter1=="delete"){
			$this->db->where('book_status_id',$parameter2);
			$this->db->delete('tbl_book_status');
			redirect('Admin_controller/Admin/manage_book_status');
		}
		if($parameter1=="edit"){
			$this->db->where('book_status_id',$parameter2);
			$status_data['edit_statuses']=$this->db->get('tbl_book_status');
		}
		if($parameter1=="do_update"){
			$update_data['book_status_code']=$this->input->post('txt_status_code');
			$update_data['book_status_name']=$this->input->post('txt_status_name');
			$this->db->where('book_status_id',$parameter2);
			$this->db->update('tbl_book_status',$update_data);
			redirect('Admin_controller/Admin/manage_book_status');
		}
		$status_data['statuses']=$this->db->get('tbl_book_status');
		$this->load->view('admin_view/book_status_view',$status_data);
	}

	public function manage_book_master($parameter1="",$parameter2=""){
		if($parameter1=="add"){

			$data['book_master_name']=$this->input->post('txt_book_master_name');
			$data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
			$data['book_master_desc']=$this->input->post('txt_book_master_des');
			$data['book_master_img']="img";
			$this->db->insert('tbl_book_master',$data);
			$data['cat_id']=$this->input->post('select_category');
			$data['author_id']=$this->input->post('select_author');
			$data['pub_id']=$this->input->post('select_publisher');
			$data['book_status_id']=$this->input->post('select_status');
			$data['book_org_price']=$this->input->post('txt_book_master_price');
			redirect('Admin_controller/Admin/manage_book_master');
		}
		if($parameter1=="delete"){
			$this->db->where('book_master_id',$parameter2);
			$this->db->delete('tbl_book_master');
			redirect('Admin_controller/Admin/manage_book_master');
		}
		if($parameter1=="edit"){
			$this->db->where('book_master_id',$parameter2);
			$book_master_data['edit_book_master']=$this->db->get('tbl_book_master');
			//redirect('Admin_controller/Admin/manage_book_master');
		}
		if($parameter1=="do_update"){
			$update_data['book_status_code']=$this->input->post('txt_status_code');
			$update_data['book_status_name']=$this->input->post('txt_status_name');
			$this->db->where('book_status_id',$parameter2);
			$this->db->update('tbl_book_status',$update_data);
			redirect('Admin_controller/Admin/manage_book_status');
		}
		$book_master_data['state']=$this->db->get('tbl_book_master');
		$this->load->view('admin_view/book_master_view',$book_master_data);
	}

	public function manage_admin_login($parameter1="",$parameter2=""){
		if($parameter1=="check"){
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$resultset=$this->db->query("select *from tbl_user where user_email='".$username."'
			and user_password='".$password."'");
			if($resultset->num_rows()==0){
				echo "username and password are not match";
				redirect('Admin_controller/Admin/manage_admin_login');
			}
			else{
				echo "login sucessfull";

			}
		}

		$this->load->view('admin_view/admin_login_view');
	}




}
