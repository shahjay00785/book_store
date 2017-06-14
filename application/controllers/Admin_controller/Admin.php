<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

	}

	public function manage_category($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['cat_name']=$this->input->post('txt_category_name');
			$data['cat_desc']=$this->input->post('txt_category_desc');
			$data['cat_img']=$this->input->post('txt_category_img');
			$data['cat_status']=$this->input->post('txt_radio_yes');
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
			redirect(base_url().'Admin_controller/Admin/manage_category');
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
		$category_data['categories']=$this->category_model->category_view('tbl_category');
		$this->load->view('Admin_view/category_view',$category_data);
	}

	public function manage_author($parameter1="",$parameter2=""){
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

	public function manage_publisher($parameter1="",$parameter2=""){
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

	public function manage_book_master($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['book_master_name']=$this->input->post('txt_book_master_name');
			$data['book_master_desc']=$this->input->post('txt_book_master_desc');
			$data['book_master_img']=$this->input->post('txt_book_master_img');
			$data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
			$data['book_master_price']=$this->input->post('txt_book_master_price');
			$data['book_master_status']=$this->input->post('txt_radio_yes');
			$data['author_id']=$this->input->post('txt_select_author');
			$data['publisher_id']=$this->input->post('txt_select_publisher');
			$data['cat_id']=$this->input->post('txt_select_category');



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
			$update_data['publisher_id']=$this->input->post('txt_select_publisher');
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
