<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin_view/admin_login_view');
	}

	public function manage_category($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else
		{
			if($parameter1=="add"){
				$data['cat_name']=$this->input->post('txt_category_name');
				$data['cat_desc']=$this->input->post('txt_category_desc');
				$data['cat_img']=$this->input->post('txt_category_img');
				$data['cat_status']=$this->input->post('txt_radio_yes');
				$data['cat_parent_id']=$this->input->post('txt_parent_id');
				$data['cat_update_date']=date('Y-m-d H:i:s');

				if($_FILES["txt_category_img"]["error"]==0)
				{
					$newname = $_FILES["txt_category_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/category_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_category_img');
					$data['cat_img']=$newname;
				}

				$this->category_model->category_save($data);
				if($data['cat_parent_id']=="0")
				{
					redirect(base_url().'Admin_controller/Admin/manage_category');
				}
				else {
					redirect(base_url().'Admin_controller/Admin/manage_category/'.$data['cat_parent_id']);
				}
			}

			if($parameter1=="delete"){
				$this->category_model->category_delete($parameter2);
				redirect('Admin_controller/Admin/manage_category');
			}

			if($parameter1=="edit"){
				$category_data['edit_category']=$this->category_model->category_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['cat_name']=$this->input->post('txt_category_name');
				$update_data['cat_desc']=$this->input->post('txt_category_desc');
				$update_data['cat_status']=$this->input->post('txt_radio_yes');
				$updtae_data['cat_update_date']=date('Y-m-d H:i:s');

				if($_FILES["txt_category_img"]["error"]==0)
				{
					$newname = $_FILES["txt_category_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/category_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_category_img');
					$update_data['cat_img']=$newname;
				}
				$this->category_model->category_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_category');
			}
			//$category_data['categories']=$this->category_model->category_view('tbl_category');
			if($parameter1=="")
			{
				$category_data['pid']=0;
				$category_data['categories']=$this->db->get_where('tbl_category',array("cat_parent_id"=>0));
			}
			else {
				$category_data['pid']=$parameter1;
				$category_data['categories']=$this->db->get_where('tbl_category',array("cat_parent_id"=>$parameter1));

			}
			$this->load->view('Admin_view/category_view',$category_data);
		}
	}

	public function manage_college($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else
		{
			if($parameter1=="add"){
				$data['college_name']=$this->input->post('txt_college_name');
				$data['city_id']=$this->input->post('txt_select_city');
				$this->db->insert('tbl_college',$data);
				redirect('Admin_controller/Admin/manage_college');

			}

			if($parameter1=="delete"){
				$this->db->where('college_id',$parameter2);
				$this->db->delete('tbl_college');
				redirect('Admin_controller/Admin/manage_college');
			}

			if($parameter1=="edit"){
				$this->db->where('college_id',$parameter2);
			 	$college_data['edit_college']=$this->db->get("tbl_college");

			}

			if($parameter1=="do_update"){
			}
			$college_data['college_data']=$this->db->join('tbl_city','tbl_city.city_id=tbl_college.city_id');
			$college_data['college_data']=$this->db->get('tbl_college');

		}
		$college_data['college']=$this->db->get('tbl_college');
		$this->load->view('Admin_view/college_view',$college_data);
	}

	public function manage_author($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else {

			if($parameter1=="add"){
				$data['author_name']=$this->input->post('txt_author_name');
				$data['author_desc']=$this->input->post('txt_author_desc');
				$data['author_status']=$this->input->post('txt_radio_yes');
				$data['author_gender']=$this->input->post('txt_radio_male');
				$data['author_website']=$this->input->post('txt_author_website');
				$data['author_email']=$this->input->post('txt_author_email');
				$data['author_contactnum']=$this->input->post('txt_author_contactnum');




				$this->author_model->author_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_author');
			}

			if($parameter1=="delete"){
				$this->author_model->author_delete($parameter2);
				redirect('Admin_controller/Admin/manage_author');
			}

			if($parameter1=="edit"){
				$author_data['edit_author']=$this->author_model->author_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['author_name']=$this->input->post('txt_author_name');
				$update_data['author_desc']=$this->input->post('txt_author_desc');
				$update_data['author_status']=$this->input->post('txt_radio_yes');
				$update_data['author_gender']=$this->input->post('txt_radio_male');
				$update_data['author_website']=$this->input->post('txt_author_website');
				$update_data['author_email']=$this->input->post('txt_author_email');
				$update_data['author_contactnum']=$this->input->post('txt_author_contactnum');

				$this->author_model->author_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_author');
			}
			$author_data['authors']=$this->author_model->author_view('tbl_author');
			$this->load->view('Admin_view/author_view',$author_data);
		}
	}

	public function manage_publisher($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else {


			if($parameter1=="add"){
				$data['publisher_name']=$this->input->post('txt_publisher_name');
				$data['publisher_desc']=$this->input->post('txt_publisher_desc');
				$data['publisher_status']=$this->input->post('txt_radio_yes');

				$data['publisher_website']=$this->input->post('txt_publisher_website');
				$data['publisher_email']=$this->input->post('txt_publisher_email');
				$data['publisher_contactnum']=$this->input->post('txt_publisher_contactnum');
				$this->publisher_model->publisher_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_publisher');
			}

			if($parameter1=="delete"){
				$this->publisher_model->publisher_delete($parameter2);
				redirect('Admin_controller/Admin/manage_publisher');
			}

			if($parameter1=="edit"){
				$publisher_data['edit_publisher']=$this->publisher_model->publisher_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['publisher_name']=$this->input->post('txt_publisher_name');
				$update_data['publisher_desc']=$this->input->post('txt_publisher_desc');
				$update_data['publisher_status']=$this->input->post('txt_radio_yes');

				$update_data['publisher_website']=$this->input->post('txt_publisher_website');
				$update_data['publisher_email']=$this->input->post('txt_publisher_email');
				$update_data['publisher_contactnum']=$this->input->post('txt_publisher_contactnum');

				$this->publisher_model->publisher_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_publisher');
			}
			$publisher_data['publishers']=$this->publisher_model->publisher_view('tbl_publisher');
			$this->load->view('Admin_view/publisher_view',$publisher_data);
		}
	}

	public function smart_resize_image( $file, $width = 0, $height = 0, $proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false )
  	{
    	if ( $height <= 0 && $width <= 0 ) {
      		return false;
    	}

    	$info = getimagesize($file);
    	$image = '';

    	$final_width = 0;
    	$final_height = 0;
    	list($width_old, $height_old) = $info;

    	if ($proportional) {
      		if ($width == 0) $factor = $height/$height_old;
      		elseif ($height == 0) $factor = $width/$width_old;
      		else $factor = min ( $width / $width_old, $height / $height_old);

      		$final_width = round ($width_old * $factor);
      		$final_height = round ($height_old * $factor);

    	}
    	else {
     		$final_width = ( $width <= 0 ) ? $width_old : $width;
      		$final_height = ( $height <= 0 ) ? $height_old : $height;
    	}

    	switch ( $info[2] ) {
      		case IMAGETYPE_GIF:
        	$image = imagecreatefromgif($file);
      		break;
      		case IMAGETYPE_JPEG:
        	$image = imagecreatefromjpeg($file);
      		break;
      		case IMAGETYPE_PNG:
        	$image = imagecreatefrompng($file);
      		break;
      		default:
        	return false;
    	}

    	$image_resized = imagecreatetruecolor( $final_width, $final_height );

    	if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
      	$trnprt_indx = imagecolortransparent($image);

      	// If we have a specific transparent color
      	if ($trnprt_indx >= 0) {

 	       // Get the original image's transparent color's RGB values
   		     $trnprt_color    = imagecolorsforindex($image, $trnprt_indx);

        // Allocate the same color in the new image resource
    	    $trnprt_indx    = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);

        // Completely fill the background of the new image with allocated color.
        	imagefill($image_resized, 0, 0, $trnprt_indx);

        // Set the background color for new image to transparent
  	      imagecolortransparent($image_resized, $trnprt_indx);


  	    }
      // Always make a transparent background color for PNGs that don't have one allocated already
    	elseif ($info[2] == IMAGETYPE_PNG) {

        	// Turn off transparency blending (temporarily)
        	imagealphablending($image_resized, false);

 	       // Create a new transparent color for image
  	 	     $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);

     	   // Completely fill the background of the new image with allocated color.
        	imagefill($image_resized, 0, 0, $color);

  	      // Restore transparency blending
    	    imagesavealpha($image_resized, true);
      	}
    }

    imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

    if ( $delete_original ) {
      if ( $use_linux_commands )
        exec('rm '.$file);
      else
        @unlink($file);
    }

    switch ( strtolower($output) ) {
      case 'browser':
        $mime = image_type_to_mime_type($info[2]);
        header("Content-type: $mime");
        $output = NULL;
      break;
      case 'file':
        $output = $file;
      break;
      case 'return':
        return $image_resized;
      break;
      default:
      break;
    }

    switch ( $info[2] ) {
      case IMAGETYPE_GIF:
        imagegif($image_resized, $output);
      break;
      case IMAGETYPE_JPEG:
        imagejpeg($image_resized, $output);
      break;
      case IMAGETYPE_PNG:
        imagepng($image_resized, $output);
      break;
      default:
        return false;
    }

    return true;
  }

	function paging_init($controller_name,$total_row,$per_page)
	{
		/* pagination class starts here */
		//echo $controller_name;
		$this->load->library('pagination');
		$config['base_url'] = base_url()."/Admin_controller/".$controller_name;
		$config['total_rows'] =$total_row;
		$config['per_page'] = $per_page;

		// this extra
		//$config['uri_segment'] = 4;
		//$config['use_page_numbers'] = TRUE;
		//$config['page_query_string'] = TRUE;
		// this extra ends here

				$config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li><span><b style='color:red'>";
        $config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$paging_string =$this->pagination->create_links();
		return $paging_string;
		/* pagination class ends here */
	}


	public function manage_book_master($parameter1="",$parameter2="",$parameter3=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{


			if($parameter1=="add"){
				$data['book_master_name']=$this->input->post('txt_book_master_name');
				$data['book_master_desc']=$this->input->post('txt_book_master_desc');
				//	$data['book_master_img']=$this->input->post('txt_book_master_img');
				$data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
				$data['book_master_price']=$this->input->post('txt_book_master_price');
				$data['book_master_status']=$this->input->post('txt_radio_yes');
				$data['author_id']=$this->input->post('txt_select_author');
				$data['publisher_id']=$this->input->post('txt_select_publisher');
				$data['cat_id']=$this->input->post('txt_sub_cat');


				if($_FILES["txt_book_master_img"]["error"]==0)
				{
					$newname = $_FILES["txt_book_master_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/book_master_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_book_master_img');
					$data['book_master_img']=$newname;

					$this->smart_resize_image("./img/book_master_img/".$newname,0,273,true, "./img/book_master_img/".$newname,false,false);

					/*
					$this->load->library('image_lib');
					$config['image_library'] = 'gd2';
					$config['source_image'] = './img/book_master_img/'.$newname;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = 75;
					$config['height']       = 50;

					$this->load->library('image_lib', $config);

					$this->image_lib->resize();
					*/

				}

				$this->book_master_model->book_master_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_book_master');
			}

			if($parameter1=="delete"){
				$this->book_master_model->book_master_delete($parameter2);
				redirect('Admin_controller/Admin/manage_book_master');
			}

			if($parameter1=="edit"){
				$book_master_data['edit_book_master']=$this->book_master_model->book_master_edit($parameter2);
			}

			if($parameter1=="do_update"){
				$update_data['book_master_name']=$this->input->post('txt_book_master_name');
				$update_data['book_master_desc']=$this->input->post('txt_book_master_desc');
				$update_data['book_master_img']=$this->input->post('txt_book_master_img');
				$update_data['book_master_price']=$this->input->post('txt_book_master_price');
				$update_data['book_master_isbn']=$this->input->post('txt_book_master_isbn');
				$update_data['book_master_status']=$this->input->post('txt_radio_yes');
				$update_data['author_id']=$this->input->post('txt_select_author');
				$update_data['pub-lisher_id']=$this->input->post('txt_select_publisher');
				$update_data['cat_id']=$this->input->post('txt_select_category');

				if($_FILES["txt_book_master_img"]["error"]==0)
				{
					$newname = $_FILES["txt_book_master_img"]["name"];

					$config['file_name']=$newname;
					$config['upload_path']='./img/book_master_img/';
					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
					$config['max_width']='102400';
					$config['max_height']='76800';
					$config['max_size']=1024*1024*2;
					$this->load->library('upload');
					$this->upload->initialize($config);
					$this->upload->do_upload('txt_book_master_img');
					$update_data['book_master_img']=$newname;
				}
				$this->book_master_model->book_master_update($parameter2,$update_data);
				redirect('Admin_controller/Admin/manage_book_master');
			}



			/* paging starts here */
			$per_page=2;
			$this->db->limit($per_page,$parameter3);
			//$page_data['book']=$this->db->get("tbl_book_master");
			$this->db->join('tbl_author','tbl_author.author_id=tbl_book_master.author_id');
			$this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
			$this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
			$page_data['book_masters']= $this->db->get('tbl_book_master');

			$books=$this->db->get("tbl_book_master");
			$total_rows=$books->num_rows();
			$page_data['paging_string']=$this->paging_init('Admin/manage_book_master',$total_rows,$per_page);


			//$page_data['']=$this->book_master_model->book_master_view('tbl_book_master');
			$this->load->view('Admin_view/book_master_view',$page_data);

		}
	}

	public function manage_dashboard(){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			$this->load->view('Admin_view/admin_dashboard');
		}
	}

	public function manage_add_user($parameter1="",$parameter2=""){

		if($parameter1=="add"){
			$data['user_first_name']=$this->input->post('txt_user_first_name');
			$data['user_last_name']=$this->input->post('txt_user_last_name');
			$data['user_gender']=$this->input->post('txt_radio_male');
			$data['user_email']=$this->input->post('txt_user_email');
			$data['user_contactnum']=$this->input->post('txt_user_contactnum');
			$data['user_password']=$this->input->post('txt_user_password');
			$this->user_model->user_save($data);
			redirect(base_url().'Admin_controller/Admin/manage_user');
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
		$this->load->view('User_view/user_add_view',$user_data);

	}


	public function manage_user($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			if($parameter1=="add"){
				$data['user_first_name']=$this->input->post('txt_user_first_name');
				$data['user_last_name']=$this->input->post('txt_user_last_name');
				$data['user_gender']=$this->input->post('txt_radio_male');
				$data['user_email']=$this->input->post('txt_user_email');
				$data['user_contactnum']=$this->input->post('txt_user_contactnum');
				$data['user_password']=$this->input->post('txt_user_password');
				$this->user_model->user_save($data);
				redirect(base_url().'Admin_controller/Admin/manage_user');
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
			$this->load->view('Admin_view/user_view',$user_data);
		}
	}

	public function manage_admin_login($parameter1=""){


		if($parameter1=="check"){
			/*	$data['user_email'=$this->input->post('txt_user_name');
			$data['user_contactnum']=$this->input->post('txt_user_name');
			$data['user_password']=$this->input->post('txt_user_password');
			*/
			/*		$this->admin_login_model->check($data); */

			$user_email=$this->input->post('txt_user_name');
			$user_password=$this->input->post('txt_user_password');

			$login_resultset=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");
			//print_r($row);
			if($login_resultset->num_rows()>0){
				$_SESSION["useremail"]=$user_email;
				redirect('Admin_controller/Admin/manage_dashboard');
			}
			else{
				$login_data['msg']="Invalid username or Password";
				$this->load->view('Admin_view/admin_login_view',$login_data);
			}

		}


	}
	public function manage_logout($parameter1=""){
		if($parameter1=="logout"){
			session_destroy();
			redirect(base_url().'Admin_controller/Admin');
		}
	}



	public function manage_country($parameter1="",$parameter2=""){
		if($parameter1=="add"){
			$data['country_code']=$this->input->post('txt_country_code');
			$data['country_name']=$this->input->post('txt_country_name');
			$this->db->insert('tbl_country',$data);
			redirect('Admin_controller/Admin/manage_country');
		}
		if($parameter1=="delete"){
			$this->db->where('country_id',$parameter2);
			$this->db->delete('tbl_country');
			redirect('Admin_controller/Admin/manage_country');
		}
		if($parameter1=="edit"){
			$this->db->where('country_id',$parameter2);
			$country_data['edit_countries']=$this->db->get('tbl_country');
		}
		if($parameter1=="do_update"){
			$update_data['country_code']=$this->input->post('txt_country_code');
			$update_data['country_name']=$this->input->post('txt_country_name');
			$this->db->where('country_id',$parameter2);
			$this->db->update('tbl_country',$update_data);
			redirect('Admin_controller/Admin/manage_country');
		}
		$country_data['countries']=$this->db->get('tbl_country');
		$this->load->view('Admin_view/country_view',$country_data);
	}


	public function search_bar($param1=""){

		/* paging starts here */
		$per_page=3;
		$this->db->limit($per_page,$param1);
		//$page_data['book']=$this->db->get("tbl_book_master");
		$this->db->join('tbl_author','tbl_author.author_id=tbl_book_master.author_id');
		$this->db->join('tbl_publisher','tbl_publisher.publisher_id=tbl_book_master.publisher_id');
		$this->db->join('tbl_category','tbl_category.cat_id=tbl_book_master.cat_id');
		$page_data['book']= $this->db->get('tbl_book_master');

		$books=$this->db->get("tbl_book_master");
		$total_rows=$books->num_rows();
		$page_data['paging_string']=$this->paging_init('Admin/search_bar',$total_rows,$per_page);
		/* paging ends  here
		 */

		$this->load->view('Admin_view/search_view',$page_data);
	}

	public function book_activity($status) {
		$data=$this->book_master_model->book_master_view_id($status);
		foreach ($data->result() as $row_data) {
			if($row_data->book_master_status=="Yes"){
				$data="No";
				$this->db->where('book_master_id',$status);
				$this->db->update('tbl_book_master',array('book_master_status'=> $data));
				redirect($_SERVER["HTTP_REFERER"]);
			}
			else {
				if($row_data->book_master_status=="No"){
					$data="Yes";
					$this->db->where('book_master_id',$status);
					$this->db->update('tbl_book_master',array('book_master_status'=> $data));
					redirect($_SERVER["HTTP_REFERER"]);
				}
			}


		}
	}


	public function college_book($parameter1="",$parameter2=""){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			if($parameter1=="add"){
				//$books_id= implode(',',$this->input->post('checkbox_book'));
				$data['college_id']=$this->input->post('txt_select_college');

				$this->db->where('college_id',$data['college_id']);
				$this->db->delete('tbl_college_book');

				$books_id=$this->input->post('checkbox_book');
				for($i=0;$i<count($books_id);$i++)
				{
					$data['book_master_id']=$books_id[$i];
					$this->db->insert('tbl_college_book',$data);
				}
				//$this->db->insert('tbl;_college_book',$data);
				//redirect(base_url().'Admin_controller/Admin/manage_book_master');
			}


			$this->load->view('Admin_view/college_book_view');
		}




	}

	public function reg_user($parameter1="",$parameter2=""){

			if($parameter1=="add"){
				$data['registration_full_name']=$this->input->post('txt_reg_name');
				$data['registration_email_id']=$this->input->post('txt_reg_email');
				$data['registrayion_phone_number']=$this->input->post('txt_reg_number');

				$this->db->insert('tbl_registration',$data);
				$msg="sucessfull registration";
				$this->load->view('User_view/user_login_view',$msg);
		}
	}

}
