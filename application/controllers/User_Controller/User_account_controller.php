<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_account_controller extends CI_Controller {

	public function index()
	{
  	$this->load->view('User_view/user_account_view');
	}

	public function add_user($paramete1=""){
		if($paramete1=="add"){
			$user_data['user_name']=$this->db-input('txt_name');
			$user_data['user_phone']=$this->db-input('txt_phone');
			$user_data['user_pincode']=$this->db-input('txt_pincode');
			$user_data['user_email']=$this->db-input('txt_email');
			$user_data['user_city']=$this->db-input('txt_city');
			$user_data['user_state']=$this->db-input('txt_state');
			$user_data['user_landmark']=$this->db-input('txt_landmark');
			$this->db->insert('tbl_order',$user_data);
		}

		$this->load->view('User_view/user_orderform_view');

	}
}
