<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {

  public function index()
  {
    $this->load->view('Admin_view/ajax_search_view');
  }

}
