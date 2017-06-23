<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('User_view/user_login_view');
	}

	public function manage_login($parameter1=""){
		if($parameter1=="check"){
			$user_email=$this->input->post('txt_user_name');
			$user_password=md5($this->input->post('txt_user_password'));

			$login_resultset=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");

			if($login_resultset->num_rows()>0){
				$_SESSION["useremail"]=$user_email;
				redirect('User_Controller/User_home_controller');
			}
			else{
				$login_data['msg']="Invalid username or Password";
				$this->load->view('User_view/user_login_view',$login_data);
			}


		}
	}

	public function manage_logout($parameter1=""){
		if($parameter1=="logout"){
			session_destroy();
			redirect('User_Controller/User_home_controller');

		}
	}

}
