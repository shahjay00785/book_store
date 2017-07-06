<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_account_controller extends CI_Controller {

	public function index()
	{
  	$this->load->view('User_view/user_account_view');
	}

	public function add_user($p=""){
		if($p=="add"){
			$user_data['user_name']=$this->input->post('txt_name');
			$user_data['user_phone']=$this->input->post('txt_phone');
			$user_data['user_pincode']=$this->input->post('txt_pincode');
			$user_data['user_email']=$this->input->post('txt_email');
			$user_data['user_city']=$this->input->post('txt_city');
			$user_data['user_state']=$this->input->post('txt_state');
			$user_data['user_landmark']=$this->input->post('txt_landmark');
			$this->db->insert('tbl_order_detail',$user_data);
		}

		$this->load->view('User_view/user_orderform_view');

	}
}
