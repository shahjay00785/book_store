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


}
