<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_product_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('User_view/user_product_view');
	}

	public function product_by_subcat($id){
		$sub_cat_id['sub_cat_id']=$id;
		$this->load->view('User_view/user_product_view',$sub_cat_id);
	}

	public function product_full($id){
		$product_id['pid']=$id;
		$product_data['pdata']=$this->book_master_model->book_master_view_id('tbl_book_master',$id);
		$this->load->view('User_view/user_product_full_view',$product_data);
	}
}
