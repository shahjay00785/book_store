<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_home_controller extends CI_Controller {

	public function index()
	{
    $this->load->view('User_view/user_home_view');
	}
}
