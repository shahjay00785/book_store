<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin_view/admin_login_view');
	}

	public function manage_category($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else
		{
			if($parameter1=="add"){
				$data['cat_name']=$this->input->post('txt_category_name');
				$data['cat_desc']=$this->input->post('txt_category_desc');
				$data['cat_img']=$this->input->post('txt_category_img');
				$data['cat_status']=$this->input->post('txt_radio_yes');
				$data['cat_parent_id']=$this->input->post('txt_parent_id');
				$data['cat_update_date']=date('Y-m-d H:i:s');

				if($_FILES["txt_category_img"]["error"]==0)
				{
					$newname = $_FILES["txt_category_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/category_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_category_img');
					$data['cat_img']=$newname;
				}

				$this->category_model->category_save($data);
				if($data['cat_parent_id']=="0")
				{
					redirect(base_url().'Admin_controller/Admin/manage_category');
				}
				else {
					redirect(base_url().'Admin_controller/Admin/manage_category/'.$data['cat_parent_id']);
				}
			}

			if($parameter1=="delete"){
				$this->category_model->category_delete($parameter2);
				redirect('Admin_controller/Admin/manage_category');
			}

			if($parameter1=="edit"){
				$category_data['edit_category']=$this->category_model->category_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['cat_name']=$this->input->post('txt_category_name');
				$update_data['cat_desc']=$this->input->post('txt_category_desc');
				$update_data['cat_status']=$this->input->post('txt_radio_yes');
				$updtae_data['cat_update_date']=date('Y-m-d H:i:s');

				if($_FILES["txt_category_img"]["error"]==0)
				{
					$newname = $_FILES["txt_category_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/category_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_category_img');
					$update_data['cat_img']=$newname;
				}
				$this->category_model->category_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_category');
			}
			//$category_data['categories']=$this->category_model->category_view('tbl_category');
			if($parameter1=="")
			{
				$category_data['pid']=0;
				$category_data['categories']=$this->db->get_where('tbl_category',array("cat_parent_id"=>0));
			}
			else {
				$category_data['pid']=$parameter1;
				$category_data['categories']=$this->db->get_where('tbl_category',array("cat_parent_id"=>$parameter1));

			}
			$this->load->view('Admin_view/category_view',$category_data);
		}
	}

	public function manage_author($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else {

			if($parameter1=="add"){
				$data['author_name']=$this->input->post('txt_author_name');
				$data['author_desc']=$this->input->post('txt_author_desc');
				$data['author_status']=$this->input->post('txt_radio_yes');
				$data['author_gender']=$this->input->post('txt_radio_male');
				$data['author_website']=$this->input->post('txt_author_website');
				$data['author_email']=$this->input->post('txt_author_email');
				$data['author_contactnum']=$this->input->post('txt_author_contactnum');




				$this->author_model->author_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_author');
			}

			if($parameter1=="delete"){
				$this->author_model->author_delete($parameter2);
				redirect('Admin_controller/Admin/manage_author');
			}

			if($parameter1=="edit"){
				$author_data['edit_author']=$this->author_model->author_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['author_name']=$this->input->post('txt_author_name');
				$update_data['author_desc']=$this->input->post('txt_author_desc');
				$update_data['author_status']=$this->input->post('txt_radio_yes');
				$update_data['author_gender']=$this->input->post('txt_radio_male');
				$update_data['author_website']=$this->input->post('txt_author_website');
				$update_data['author_email']=$this->input->post('txt_author_email');
				$update_data['author_contactnum']=$this->input->post('txt_author_contactnum');

				$this->author_model->author_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_author');
			}
			$author_data['authors']=$this->author_model->author_view('tbl_author');
			$this->load->view('Admin_view/author_view',$author_data);
		}
	}

	public function manage_publisher($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else {


			if($parameter1=="add"){
				$data['publisher_name']=$this->input->post('txt_publisher_name');
				$data['publisher_desc']=$this->input->post('txt_publisher_desc');
				$data['publisher_status']=$this->input->post('txt_radio_yes');

				$data['publisher_website']=$this->input->post('txt_publisher_website');
				$data['publisher_email']=$this->input->post('txt_publisher_email');
				$data['publisher_contactnum']=$this->input->post('txt_publisher_contactnum');
				$this->publisher_model->publisher_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_publisher');
			}

			if($parameter1=="delete"){
				$this->publisher_model->publisher_delete($parameter2);
				redirect('Admin_controller/Admin/manage_publisher');
			}

			if($parameter1=="edit"){
				$publisher_data['edit_publisher']=$this->publisher_model->publisher_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['publisher_name']=$this->input->post('txt_publisher_name');
				$update_data['publisher_desc']=$this->input->post('txt_publisher_desc');
				$update_data['publisher_status']=$this->input->post('txt_radio_yes');

				$update_data['publisher_website']=$this->input->post('txt_publisher_website');
				$update_data['publisher_email']=$this->input->post('txt_publisher_email');
				$update_data['publisher_contactnum']=$this->input->post('txt_publisher_contactnum');

				$this->publisher_model->publisher_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_publisher');
			}
			$publisher_data['publishers']=$this->publisher_model->publisher_view('tbl_publisher');
			$this->load->view('Admin_view/publisher_view',$publisher_data);
		}
	}

	public function manage_book_master($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{


			if($parameter1=="add"){
				$data['book_master_name']=$this->input->post('txt_book_master_name');
				$data['book_master_desc']=$this->input->post('txt_book_master_desc');
				//	$data['book_master_img']=$this->input->post('txt_book_master_img');
				$data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
				$data['book_master_price']=$this->input->post('txt_book_master_price');
				$data['book_master_status']=$this->input->post('txt_radio_yes');
				$data['author_id']=$this->input->post('txt_select_author');
				$data['publisher_id']=$this->input->post('txt_select_publisher');
				$data['cat_id']=$this->input->post('txt_select_sub_category');


				if($_FILES["txt_book_master_img"]["error"]==0)
				{
					$newname = $_FILES["txt_book_master_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/book_master_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_book_master_img');
					$data['book_master_img']=$newname;
				}

				$this->book_master_model->book_master_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_book_master');
			}

			if($parameter1=="delete"){
				$this->book_master_model->book_master_delete($parameter2);
				redirect('Admin_controller/Admin/manage_book_master');
			}

			if($parameter1=="edit"){
				$book_master_data['edit_book_master']=$this->book_master_model->book_master_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['book_master_name']=$this->input->post('txt_book_master_name');
				$update_data['book_master_desc']=$this->input->post('txt_book_master_desc');
				$update_data['book_master_img']=$this->input->post('txt_book_master_img');
				$update_data['book_master_price']=$this->input->post('txt_book_master_price');
				$update_data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
				$update_data['book_master_status']=$this->input->post('txt_radio_yes');
				$update_data['author_id']=$this->input->post('txt_select_author');
				$update_data['pub-lisher_id']=$this->input->post('txt_select_publisher');
				$update_data['cat_id']=$this->input->post('txt_select_category');

				if($_FILES["txt_book_master_img"]["error"]==0)
				{
					$newname = $_FILES["txt_book_master_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/book_master_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_book_master_img');
					$update_data['book_master_img']=$newname;
				}
				$this->book_master_model->book_master_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_book_master');
			}
			$book_master_data['book_masters']=$this->book_master_model->book_master_view('tbl_book_master');
			$this->load->view('Admin_view/book_master_view',$book_master_data);
		}
	}

	public function manage_dashboard(){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			$this->load->view('Admin_view/admin_dashboard');
		}
	}

	public function manage_add_user($parameter1="",$parameter2=""){

		if($parameter1=="add"){
			$data['user_first_name']=$this->input->post('txt_user_first_name');
			$data['user_last_name']=$this->input->post('txt_user_last_name');
			$data['user_gender']=$this->input->post('txt_radio_male');
			$data['user_email']=$this->input->post('txt_user_email');
			$data['user_contactnum']=$this->input->post('txt_user_contactnum');
			$data['user_password']=$this->input->post('txt_user_password');
			$this->user_model->user_save($data);
			redirect(base_url().'Admin_controller/Admin/manage_user');
		}

		if($parameter1=="delete"){
			$this->user_model->user_delete($parameter2);
			redirect('Admin_controller/Admin/manage_user');
		}

		if($parameter1=="edit"){
			$user_data['edit_user']=$this->user_model->user_edit($parameter2);
		}

		if($parameter1=="do_update"){
			$update_data['user_first_name']=$this->input->post('txt_user_first_name');
			$update_data['user_last_name']=$this->input->post('txt_user_last_name');
			$update_data['user_gender']=$this->input->post('txt_radio_male');
			$update_data['user_email']=$this->input->post('txt_user_email');
			$update_data['user_password']=$this->input->post('txt_user_password');
			$this->user_model->user_update($parameter2,$update_data);
			redirect('Admin_controller/Admin/manage_user');
		}
		$user_data['users']=$this->user_model->user_view('tbl_user');
		$this->load->view('User_view/user_add_view',$user_data);

	}


	public function manage_user($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			if($parameter1=="add"){
				$data['user_first_name']=$this->input->post('txt_user_first_name');
				$data['user_last_name']=$this->input->post('txt_user_last_name');
				$data['user_gender']=$this->input->post('txt_radio_male');
				$data['user_email']=$this->input->post('txt_user_email');
				$data['user_contactnum']=$this->input->post('txt_user_contactnum');
				$data['user_password']=$this->input->post('txt_user_password');
				$this->user_model->user_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_user');
			}

			if($parameter1=="delete"){
				$this->user_model->user_delete($parameter2);
				redirect('Admin_controller/Admin/manage_user');
			}

			if($parameter1=="edit"){
				$user_data['edit_user']=$this->user_model->user_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['user_first_name']=$this->input->post('txt_user_first_name');
				$update_data['user_last_name']=$this->input->post('txt_user_last_name');
				$update_data['user_gender']=$this->input->post('txt_radio_male');
				$update_data['user_email']=$this->input->post('txt_user_email');
				$update_data['user_password']=$this->input->post('txt_user_password');
				$this->user_model->user_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_user');
			}
			$user_data['users']=$this->user_model->user_view('tbl_user');
			$this->load->view('Admin_view/user_view',$user_data);
		}
	}

	public function manage_admin_login($parameter1=""){


		if($parameter1=="check"){
			/*	$data['user_email'=$this->input->post('txt_user_name');
			$data['user_contactnum']=$this->input->post('txt_user_name');
			$data['user_password']=$this->input->post('txt_user_password');
			*/
			/*		$this->admin_login_model->check($data); */

			$user_email=$this->input->post('txt_user_name');
			$user_password=$this->input->post('txt_user_password');

			$login_resultset=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");
			//print_r($row);
			if($login_resultset->num_rows()>0){
				$_SESSION["useremail"]=$user_email;
				redirect('Admin_controller/Admin/manage_dashboard');
			}
			else{
				$login_data['msg']="Invalid username or Password";
				$this->load->view('Admin_view/admin_login_view',$login_data);
			}

		}


	}
	public function manage_logout($parameter1=""){
		if($parameter1=="logout"){
			session_destroy();
			redirect(base_url().'Admin_controller/Admin');
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
		$this->load->view('Admin_view/country_view',$country_data);
	}


	public function search_bar(){
		$this->load->view('Admin_view/search_view');
	}

	public function book_activity($status) {
		$data=$this->book_master_model->book_master_view_id($status);
		foreach ($data->result() as $row_data) {
			if($row_data->book_master_status=="Yes"){
				$data="No";
				$this->db->where('book_master_id',$status);
				$this->db->update('tbl_book_master',array('book_master_status'=> $data));
				redirect($_SERVER["HTTP_REFERER"]);
			}
			else {
				if($row_data->book_master_status=="No"){
					$data="Yes";
					$this->db->where('book_master_id',$status);
					$this->db->update('tbl_book_master',array('book_master_status'=> $data));
					redirect($_SERVER["HTTP_REFERER"]);
				}
			}


		}
	}


	public function college_book($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			if($parameter1=="add"){
				//$books_id= implode(',',$this->input->post('checkbox_book'));
				$data['college_id']=$this->input->post('txt_select_college');

				$this->db->where('college_id',$data['college_id']);
				$this->db->delete('tbl_college_book');

				$books_id=$this->input->post('checkbox_book');
				for($i=0;$i<count($books_id);$i++)
				{
					$data['book_master_id']=$books_id[$i];
					$this->db->insert('tbl_college_book',$data);
				}
				//$this->db->insert('tbl;_college_book',$data);
				//redirect(base_url().'Admin_controller/Admin/manage_book_master');
			}

					$this->load->view('Admin_view/college_book_view');
		}

	}

}
