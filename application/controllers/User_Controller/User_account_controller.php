<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_account_controller extends CI_Controller {

	public function index()
	{
  	$this->load->view('User_view/user_account_view');
	}
}
