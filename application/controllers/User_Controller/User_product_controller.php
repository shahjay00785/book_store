<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_product_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('User_view/user_product_view');
	}

	public function product_full(){
		$this->load->view('User_view/user_product_full_view');
	}
}
