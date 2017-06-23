<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_signup_controller extends CI_Controller {

	public function index()
	{
  //  echo "User signup";
    $this->load->view('User_view/user_signup_view');
	}

	public function manage_user($parameter1="",$parameter2=""){
	/*	if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{ } */
			if($parameter1=="add"){
				$data['user_first_name']=$this->input->post('txt_user_first_name');
				$data['user_last_name']=$this->input->post('txt_user_last_name');
				$data['user_gender']=$this->input->post('txt_radio_male');
				$data['user_email']=$this->input->post('txt_user_email');
				$data['user_contactnum']=$this->input->post('txt_user_contactnum');
				$data['user_password']=md5($this->input->post('txt_user_password'));
				$this->user_model->user_save($data);
				redirect(base_url().'User_Controller/user_signup_controller');
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

		}


}
