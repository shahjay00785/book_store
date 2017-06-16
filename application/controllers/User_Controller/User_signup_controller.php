<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_signup_controller extends CI_Controller {

	public function index()
	{
  //  echo "User signup";
    $this->load->view('User_view/user_signup_view');
	}
}
