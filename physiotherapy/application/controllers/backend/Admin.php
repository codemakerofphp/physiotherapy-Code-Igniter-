<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {

		parent::__construct();

		$this->lang->load('content', $_SESSION['lang']);

		if (!isset($_SESSION['user_auth']) || $_SESSION['user_auth'] != true) {
			redirect('login', 'refresh');
		}
		if ($_SESSION['userType'] != 'admin')
			redirect('login', 'refresh');
		//Model Loading
		$this->load->model('AdminModel');
		$this->load->library("pagination");
		$this->load->helper("url");
		$this->load->helper("text");

		date_default_timezone_set("Asia/Dhaka");
	}

	public function index() {
		
		$data['title']      = 'Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['page']       = 'backEnd/dashboard_view';
		$data['activeMenu'] = 'dashboard_view';
		
		
		$this->load->view('backEnd/master_page', $data);
	}

	public function add_user($param1 = '') {


		$messagePage['divissions'] = $this->db->get('tbl_divission')->result_array();
		$messagePage['userType']   = $this->db->get('user_type')->result_array();

		$messagePage['title']      = 'Add User Admin Panel • HRSOFTBD News Portal Admin Panel';
		$messagePage['page']       = 'backEnd/admin/add_user';
		$messagePage['activeMenu'] = 'add_user';
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$saveData['firstname'] = $this->input->post('first_name', true);
			$saveData['lastname']  = $this->input->post('last_name', true);
			$saveData['username']  = $this->input->post('user_name', true);
			$saveData['email']     = $this->input->post('email', true);
			$saveData['phone']     = $this->input->post('phone', true);
			$saveData['password']  = sha1($this->input->post('password', true));
			$saveData['address']   = $this->input->post('address', true);
			$saveData['roadHouse'] = $this->input->post('road_house', true);
			$saveData['userType']  = $this->input->post('user_type', true);
			$saveData['photo']     = 'assets/userPhoto/defaultUser.jpg';


			//This will returns as third parameter num_rows, result_array, result
			$username_check = $this->AdminModel->isRowExist('user', array('username' => $saveData['username']), 'num_rows');
			$email_check = $this->AdminModel->isRowExist('user', array('email' => $saveData['email']), 'num_rows');

			if ($username_check > 0 || $email_check > 0) {
				//Invalid message
				$messagePage['page'] = 'backEnd/admin/insertFailed';
				$messagePage['noteMessage'] = "<hr> UserName: " . $saveData['username'] . " can not be create.";
				if ($username_check > 0) {

					$messagePage['noteMessage'] .= '<br> Cause this username is already exist.';
				} else if ($email_check > 0) {

					$messagePage['noteMessage'] .= '<br> Cause this email is already exist.';
				}
			} else {
				//success
				$insertId = $this->AdminModel->saveDataInTable('user', $saveData, 'true');

				$messagePage['page'] = 'backEnd/admin/insertSuccessfull';
				$messagePage['noteMessage'] = "<hr> UserName: " . $saveData['username'] . " has been created successfully.";

				// Category allocate for users
				if (!empty($this->input->post('selectCategory', true))) {

					foreach ($this->input->post('selectCategory', true) as $cat_value) {

						$this->db->insert('category_user', array('userId' => $insertId, 'categoryId' => $cat_value));
					}
				}
			}
		}


		$this->load->view('backEnd/master_page', $messagePage);
	}

	public function edit_user($param1 = '') {
		// Update using post method 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$saveData['firstname'] = $this->input->post('first_name', true);
			$saveData['lastname']  = $this->input->post('last_name', true);
			$saveData['phone']     = $this->input->post('phone', true);
			$saveData['address']   = $this->input->post('address', true);
			$saveData['roadHouse'] = $this->input->post('road_house', true);
			$saveData['userType']  = $this->input->post('user_type', true);
			$user_id               = $this->input->post('user_id', true);


			$this->db->where('id', $user_id);
			$this->db->update('user', $saveData);
			
			$data['page']        = 'backEnd/admin/insertSuccessfull';
			$data['noteMessage'] = "<hr> Data has been Updated successfully.";

		} else if ($this->AdminModel->isRowExist('user', array('id' => $param1), 'num_rows') > 0) {

			$data['userDetails']   = $this->AdminModel->isRowExist('user', array('id' => $param1), 'result_array');

			$myupozilla_id         = $this->db->get_where('tbl_upozilla', array("id"=>$data['userDetails'][0]['address']))->row();

			$data['myzilla_id']    = $myupozilla_id->zilla_id;
			$data['mydivision_id'] = $myupozilla_id->division_id;

			$data['divissions']    = $this->db->get('tbl_divission')->result();
		
			$data['distrcts']      = $this->db->get_where('tbl_zilla',array('divission_id'=>$data['mydivision_id']))->result();
			$data['upozilla']      = $this->db->get_where('tbl_upozilla',array('zilla_id'=>$data['myzilla_id']))->result();

			$data['userType'] = $this->db->get('user_type')->result_array();
			$data['user_id']  = $param1;
			$data['page']     = 'backEnd/admin/edit_user';

		} else {

			$data['page']        = 'errors/invalidInformationPage';
			$data['noteMessage'] = $this->lang->line('wrong_info_search');
		}
		
		$data['title']      = 'Users List Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['activeMenu'] = 'user_list';
		$this->load->view('backEnd/master_page', $data);
	}

	public function suspend_user($id, $setvalue) {

		$this->db->where('id', $id);
		$this->db->update('user', array('status' => $setvalue));
		$this->session->set_flashdata('message', 'Data Saved Successfully.');
		redirect('admin/user_list', 'refresh');
	}

	public function delete_user($id) {

		$old_image_url=$this->db->where('id', $id)->get('user')->row();
		$this->db->where('id', $id)->delete('user');
		if(isset($old_image_url->photo)){
			unlink($old_image_url->photo);
		}

		$this->session->set_flashdata('message', 'Data Deleted.');
		redirect('admin/user_list', 'refresh');
	}

	public function user_list() {

		$this->db->where('userType !=', 'admin');
		$data['myUsers']    = $this->db->get('user')->result_array();
		$data['title']      = 'Users List Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['page']       = 'backEnd/admin/user_list';
		$data['activeMenu'] = 'user_list';
		$this->load->view('backEnd/master_page', $data);
	}

	public function image_size_fix($filename, $width = 600, $height = 400, $destination = '') {

		// Content type
		// header('Content-Type: image/jpeg');
		// Get new dimensions
		list($width_orig, $height_orig) = getimagesize($filename);

		// Output 20 May, 2018 updated below part
		if ($destination == '' || $destination == null)
			$destination = $filename;

		$extention = pathinfo($destination, PATHINFO_EXTENSION);
		if ($extention != "png" && $extention != "PNG" && $extention != "JPEG" && $extention != "jpeg" && $extention != "jpg" && $extention != "JPG") {
 
			return true;
		}
		// Resample
		$image_p = imagecreatetruecolor($width, $height);
		$image   = imagecreatefromstring(file_get_contents($filename));
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

		

		if ($extention == "png" || $extention == "PNG") {
			imagepng($image_p, $destination, 9);
		} else if ($extention == "jpg" || $extention == "JPG" || $extention == "jpeg" || $extention == "JPEG") {
			imagejpeg($image_p, $destination, 70);
		} else {
			imagepng($image_p, $destination);
		}
		return true;
	}

	public function get_division() {

		$result = $this->db->select('id, name')->get('tbl_divission')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function get_zilla_from_division($division_id = 1) {

		$result = $this->db->select('id, name')->where('divission_id', $division_id)->get('tbl_zilla')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function get_upozilla_from_division_zilla($zilla_id = 1) {

		$result = $this->db->select('id, name')->where('zilla_id', $zilla_id)->get('tbl_upozilla')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function download_file($file_name = '', $fullpath='') {

		// echo $file_name; exit();
		$filePath = 'assets/ebookDocument/' . $file_name;

		if($file_name=='full' && ($fullpath != '' || $fullpath != null)) $filePath = $fullpath;

		if($_GET['file_path']) $filePath = $_GET['file_path'];
		// echo $filePath; exit();
		if (file_exists($filePath)) {
			$fileName = basename($filePath);
			$fileSize = filesize($filePath);

			// Output headers.
			header("Cache-Control: private");
			header("Content-Type: application/stream");
			header("Content-Length: " . $fileSize);
			header("Content-Disposition: attachment; filename=" . $fileName);

			// Output file.
			readfile($filePath);
			exit();
		} else {
			die('The provided file path is not valid.');
		}
	}
	
	public function profile($param1 = '')
	{

		$user_id            = $this->session->userdata('userid');
		$data['user_info']  = $this->AdminModel->get_user($user_id);


		$myzilla_id         = $data['user_info']->zilla_id;
		$mydivision_id      = $data['user_info']->division_id;

		$data['divissions'] = $this->db->get('tbl_divission')->result();

		$data['distrcts']   = $this->db->get_where('tbl_zilla', array('divission_id' => $mydivision_id))->result();
		$data['upozilla']   = $this->db->get_where('tbl_upozilla', array('zilla_id'  => $myzilla_id))->result();

		if ($param1 == 'update_photo') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    
			    
			    //exta work
                $path_parts               = pathinfo($_FILES["photo"]['name']);
                $newfile_name             = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
                $dir                      = date("YmdHis", time());
                $config['file_name']      = $newfile_name . '_' . $dir;
                $config['remove_spaces']  = TRUE;
                //exta work
                $config['upload_path']    = 'assets/userPhoto/';
                $config['max_size']       = '20000'; //  less than 20 MB
                $config['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {

                    // case - failure
					$upload_error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', "Failed to update image.");

                } else {

                    $upload                 = $this->upload->data();
                    $newphotoadd['photo']   = $config['upload_path'] . $upload['file_name'];

                    $old_photo              = $this->db->where('id', $user_id)->get('user')->row()->photo;
                    
                    if(file_exists($old_photo)) unlink($old_photo);

                    $this->image_size_fix($newphotoadd['photo'], 200, 200);

                    $this->db->where('id', $user_id)->update('user', $newphotoadd);

                    $this->session->set_userdata('userPhoto', $newphotoadd['photo']);
					$this->session->set_flashdata('message', 'User Photo Updated Successfully!');
					
					redirect('admin/profile','refresh');
                }
                
			  }
			  
		}else if($param1 == 'update_pass'){

		   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		       
			   $old_pass    = sha1($this->input->post('old_pass', true)); 
			   $new_pass    = sha1($this->input->post('new_pass', true)); 
			   $user_id     = $this->session->userdata('userid');

			   $get_user    = $this->db->get_where('user',array('id'=>$user_id, 'password'=>$old_pass));
			   $user_exist  = $get_user->row();

			   if($user_exist){
			       
					$this->db->where('id',$user_id)
							->update('user',array('password'=>$new_pass));
					$this->session->set_flashdata('message', 'Password Updated Successfully');
					redirect('admin/profile','refresh');
					
			   }else{
			       
				    $this->session->set_flashdata('message', 'Password Update Failed');
				    redirect('admin/profile','refresh');
				   
			   }
			   
			}
			
		}else if($param1 == 'update_info'){

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    
				$update_data['firstname']   = $this->input->post('firstname', true);
				$update_data['lastname']    = $this->input->post('lastname', true);
				$update_data['roadHouse']   = $this->input->post('roadHouse', true);
				$update_data['address']     = $this->input->post('address', true);


				$db_email     = $this->db->where('id!=', $user_id)->where('email', $this->input->post('email', true))->get('user')->num_rows();
				$db_username  = $this->db->where('id!=', $user_id)->where('username', $this->input->post('username', true))->get('user')->num_rows();


				if ( $db_username == 0) {

					 $update_data['username']    = $this->input->post('username', true);
					 
				}if ( $db_email == 0) {

					 $update_data['email']       = $this->input->post('email', true);
					 
				}
				

    			if ($this->AdminModel->update_pro_info($update_data, $user_id)) {
    			    
    			    $this->session->set_userdata('username_first', $update_data['firstname']);
    			    $this->session->set_userdata('username_last', $update_data['lastname']);
    			    $this->session->set_userdata('username', $update_data['username']);
    			    
    				$this->session->set_flashdata('message', 'Information Updated Successfully!');
    				redirect('admin/profile', 'refresh');
    				
    			} else {
    			    
    				$this->session->set_flashdata('message', 'Information Update Failed!');
    				redirect('admin/profile', 'refresh');
    				
    			} 
				
			}
		}
		
		$data['title']      = 'Profile Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['activeMenu'] = 'Profile';
		$data['page']       = 'backEnd/admin/profile';
		
		$this->load->view('backEnd/master_page',$data);
	}

	public function page_settings($param1 = '', $param2 = '', $param3 = '') {
        
        $data['title']      = 'Page Setting List';
        $data['page']       = 'backEnd/admin/page_settings_list';
        $data['activeMenu'] = 'page_settings';

        if ($param1 == 'edit' && (int) $param2 > 0) {

            $data['title']      = 'Page Setting Update';
            $data['page']       = 'backEnd/admin/page_settings_edit';
            $data['table_info'] = $this->db->where('id', $param2)->get('tbl_common_pages')->row();
            $data['activeMenu'] = 'page_settings';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //exta work
				$path_parts                 = pathinfo($_FILES["photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config['file_name']        = $newfile_name . '_' . $dir;
				$config['remove_spaces']    = TRUE;
				$config['max_size']         = '20000'; //  less than 20 MB
				$config['allowed_types']    = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG|pdf|docx';
                $config['upload_path']      = 'assets/page_settings';

                $old_file_url               = $data['table_info'];
                $update_data['title']       = $this->input->post('title', true);
                $update_data['body']        = $this->input->post('body', true);

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {

                    $this->session->set_flashdata('message', $this->upload->display_errors());
                    $this->db->where('id', $param2)->update('tbl_common_pages', $update_data);
                } else {

                    $upload = $this->upload->data();

                    $update_data['attatched'] = $config['upload_path'] . '/' . $upload['file_name'];
                    $this->db->where('id', $param2)->update('tbl_common_pages', $update_data);
                    $file_parts = pathinfo($update_data['attatched']);
                    if ($file_parts['extension'] != "pdf") {
                        $this->image_size_fix($update_data['attatched'], $width = 2469, $height = 1510);
                    }
                    if(file_exists($old_file_url->attatched)) unlink($old_file_url->attatched);
                }

                $this->session->set_flashdata('message', 'Data Updated Successfully');
                redirect('admin/page_settings', 'refresh');
            }
        }else {
        	$data['table_info'] = $this->db->get('tbl_common_pages')->result_array();
        }

        $this->load->view('backEnd/master_page', $data);
    }

    public function contactmanage($param1 = 'list', $param2 = '', $param3 = '')
	{
		if ($param1 == 'list') {

			$data['activeMenu']         = 'contact_manage_list';
			$data['title']              = 'Query List';
			$data['all_contact_manage'] = $this->db->order_by('id','desc')->get('tbl_contact_manage')->result();
			$data['page']               = 'backEnd/admin/contact_manage_list';

		}else if ($param1 == 'edit' && $param2 > 0) {

			$data['activeMenu']          = 'contact_manage_edit';
			$data['title']               = 'Query Update';
			$data['page']                = 'backEnd/admin/contact_manage_edit';

			$data['contact_manage_edit'] = $this->db->get_where('tbl_contact_manage',array('id'=>$param2));

			if ($data['contact_manage_edit']->num_rows() > 0) {
			   
			   $data['contact_manage_edit'] = $data['contact_manage_edit']->row();
			   $data['contact_edit_id']     = $param2;

			   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_contact_manage['name']         = $this->input->post('name', true);
					$update_contact_manage['email']        = $this->input->post('email', true);
					$update_contact_manage['phone']        = $this->input->post('phone', true);
					$update_contact_manage['address']      = $this->input->post('address', true);
					$update_contact_manage['message_body'] = $this->input->post('message_body', true);

					if ($this->AdminModel->update_contact_manage($update_contact_manage, $param2)) {

						$this->session->set_flashdata('message','Contact Manage Updated Successfully!');
						redirect('admin/contactmanage/list','refresh');

					} else {

						$this->session->set_flashdata('message','Contact Manage Update Failed!');
						redirect('admin/contactmanage/list','refresh');
					}
				}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect ('admin/contactmanage/list','refresh');
			}
			
		}elseif ($param1 == 'delete' && $param2 > 0) {

			$delete_contact_manage = $this->db->where('id',$param2)->delete('tbl_contact_manage');

			if ($delete_contact_manage) {

				$this->session->set_flashdata('message','Contact Manage Delete Successfully!');
				redirect('admin/contactmanage','refresh');

			} else {

				$this->session->set_flashdata('message','Contact Manage Delete Failed!');
				redirect('admin/contactmanage','refresh');
			}
			
		}

		$this->load->view('backEnd/master_page',$data);
	}

	public function contactpage($param1 = '', $param2 = '', $param3 = '')
	{
		if ($param1 == 'add') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_contact_page['branch_name'] = $this->input->post('branch_name', true);
				$insert_contact_page['email']       = $this->input->post('email', true);
				$insert_contact_page['phone']       = $this->input->post('phone', true);
				$insert_contact_page['address']     = $this->input->post('address', true);
				$insert_contact_page['insert_by']   = $_SESSION['userid'];
				$insert_contact_page['insert_time'] = date('Y-m-d H:i:s');

				$add_contact_page = $this->db->insert('tbl_contact_page',$insert_contact_page);

				if ($add_contact_page) {

					$this->session->set_flashdata('message','Data Added Successfully!');
					redirect('admin/contactpage','refresh');

				}else{

					$this->session->set_flashdata('message','Data Add Successfully!');
					redirect('admin/contactpage','refresh');
				}
			}

		}elseif ($param1 == 'edit' && $param2 > 0) {

			$data['edit_info'] = $this->db->get_where('tbl_contact_page',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info'] = $data['edit_info']->row();
				$data['edit_info_id'] = $param2;

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_contact_page['branch_name'] = $this->input->post('branch_name', true);
					$update_contact_page['email']       = $this->input->post('email', true);
					$update_contact_page['phone']       = $this->input->post('phone', true);
					$update_contact_page['address']     = $this->input->post('address', true);

					$update_contact_page = $this->db->where('id',$param2)->update('tbl_contact_page',$update_contact_page);

					if ($update_contact_page) {

						$this->session->set_flashdata('message','Data Updated Successfully!');
						redirect('admin/contactpage','refresh');

					}else{

						$this->session->set_flashdata('message','Data Update Failed!');
						redirect('admin/contactpage','refresh');
					}
				}

			}else{

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/contactpage','refresh');
			}	

		}elseif ($param1 == 'delete' && $param2 > 0) {

			$delete_contact_page = $this->db->where('id',$param2)->delete('tbl_contact_page');

			if ($delete_contact_page) {

				$this->session->set_flashdata('message','Data Deleted Successfully!');
				redirect('admin/contactpage','refresh');

			}else{

				$this->session->set_flashdata('message','Data Delete Failed!');
				redirect('admin/contactpage','refresh');
			}

		}

		$data['title']            = 'Contact Page';
		$data['activeMenu']       = 'contact_page';
		$data['page']             = 'backEnd/admin/contact_page';
		$data['all_contact_page'] = $this->db->order_by('id','desc')->get('tbl_contact_page')->result();
		$this->load->view('backEnd/master_page',$data);
	}

	public function general($param1 = '', $param2 = '', $param3 = '')
	{
		if ($param1 == 'edit') {

			$param2 = $this->input->post('general_id');

			$data['edit_info'] = $this->db->get_where('tbl_general',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {;

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_general['name']  = $this->input->post('name', true);
					$update_general['value'] = $this->input->post('value', true);

					$general_update = $this->db->where('id',$param2)->update('tbl_general',$update_general);

					if ($general_update) {

						$this->session->set_flashdata('message',"General Update Successfully!");
						redirect('admin/general','refresh');

					} else {

						$this->session->set_flashdata('message',"General Update Failed");
						redirect('admin/general','refresh');
					}
					
				}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/general','refresh');
			}
			

		}elseif($param1 == 'delete' && $param2 > 0){

			$delete_general = $this->db->where('id',$param2)->delete('tbl_general');

			if ($delete_general) {

					$this->session->set_flashdata('message',"General Delete Successfully!");
					redirect('admin/general','refresh');

				} else {

					$this->session->set_flashdata('message',"General Delete Failed");
					redirect('admin/general','refresh');
				}
		}

		$data['title']      = 'General Settings';
		$data['activeMenu'] ='general';
		$data['page']       = 'backEnd/admin/general';
		$data['generals']   = $this->db->order_by('id','desc')->get('tbl_general')->result();
		$this->load->view('backEnd/master_page',$data);
	}

	public function slider($param1 = 'add', $param2 = '', $param3 = '')
	{
		if ($param1 == 'add') {


			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_slider['title_one']   = $this->input->post('title_one', true);
				$insert_slider['title_two']   = $this->input->post('title_two', true);
				$insert_slider['body']        = $this->input->post('body');
				$insert_slider['priority']    = $this->input->post('priority', true);
				$insert_slider['insert_by']   = $_SESSION['userid'];
				$insert_slider['insert_time'] = date('Y-m-d H:i:s');

				if (!empty($_FILES["photo"]['name'])){

					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/silderPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$insert_slider['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($insert_slider['photo'], 1920, 1280);
					}
				}

				$add_slider = $this->db->insert('tbl_slider',$insert_slider);

				if ($add_slider) {

					$this->session->set_flashdata('message','Slider Added Successfully!');
					redirect('admin/slider','refresh');

				} else {

					$this->session->set_flashdata('message','Slider Add Failed!');
					redirect('admin/slider','refresh');

				}
				

			}

			$data['title']      = 'Slider Add';
			$data['activeMenu'] = 'slider_add';
			$data['page']       = 'backEnd/admin/slider_add';

		}elseif ($param1 == 'list') {

			$data['title']      = 'Slider List';
			$data['activeMenu'] = 'slider_list';
			$data['page']       = 'backEnd/admin/slider_list';
			$data['sliders']    = $this->db->order_by('priority','desc')->get('tbl_slider')->result();

		}elseif ($param1 == 'edit' && $param2 > 0) {

			$data['edit_info'] = $this->db->get_where('tbl_slider',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info'] = $data['edit_info']->row();

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_slider['title_one']   = $this->input->post('title_one', true);
					$update_slider['title_two']   = $this->input->post('title_two', true);
					$update_slider['body']        = $this->input->post('body');
					$update_slider['priority']    = $this->input->post('priority', true);

					if (!empty($_FILES["photo"]['name'])){

						$path_parts                 = pathinfo($_FILES["photo"]['name']);
						$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
						$dir                        = date("YmdHis", time());
						$config_c['file_name']      = $newfile_name . '_' . $dir;
						$config_c['remove_spaces']  = TRUE;
						$config_c['upload_path']    = 'assets/silderPhoto/';
						$config_c['max_size']       = '20000'; //  less than 20 MB
						$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

						$this->load->library('upload', $config_c);
						$this->upload->initialize($config_c);
						if (!$this->upload->do_upload('photo')) {

						} else {

							$upload_c = $this->upload->data();
							$update_slider['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
							$this->image_size_fix($update_slider['photo'], 1920, 1280);
						}
					}

					if ($this->AdminModel->slider_update($update_slider,$param2)) {

						$this->session->set_flashdata('message','Slider Updated Successfully!');
						redirect('admin/slider/edit/'.$param2,'refresh');

					} else {

						$this->session->set_flashdata('message','Slider Update Failed!');
						redirect('admin/slider/edit/'.$param2,'refresh');

					}
				}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/slider/list','refresh');

			}
			

			$data['title']      = 'Slider Update';
			$data['activeMenu'] = 'slider_edit';
			$data['page']       = 'backEnd/admin/slider_edit';

		}elseif ($param1 == 'delete' && $param2 > 0) {

			if ($this->AdminModel->slider_delete($param2)) {

				$this->session->set_flashdata('message','Slider Deleted Successfully!');
				redirect('admin/slider/list','refresh');

			} else {

				$this->session->set_flashdata('message','Slider Delete Failed!');
				redirect('admin/slider/list','refresh');

			}

		}

		$this->load->view('backEnd/master_page',$data);
	}

	public function testimonials($param1 = 'add', $param2 = '', $param3 = '')
	{
		if ($param1 == 'add') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$testimonials_insert['name']        = $this->input->post('name', true);
				$testimonials_insert['position']    = $this->input->post('position', true);
				$testimonials_insert['priority']    = $this->input->post('priority', true);
				$testimonials_insert['description'] = $this->input->post('description', true);
				$testimonials_insert['insert_by']   = $_SESSION['userid'];
				$testimonials_insert['insert_time'] = date('Y-m-d H:i:s');

				if (!empty($_FILES["photo"]['name'])){

					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/testimonialsPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$testimonials_insert['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($testimonials_insert['photo'], 120, 120);
					}
				}

				if ($this->AdminModel->testimonials_add($testimonials_insert)) {

					$this->session->set_flashdata('message','Testimonials Added Successfully!');
					redirect('admin/testimonials','refresh');

				} else {

					$this->session->set_flashdata('message','Testimonials Add Failed!');
					redirect('admin/testimonials','refresh');

				}

			}

			$data['title']      = 'Testimonials Add';
			$data['activeMenu'] = 'testimonials_add';
			$data['page']       = 'backEnd/admin/testimonials_add';

		}elseif ($param1 == 'list') {

			$data['title']        = 'Testimonials List';
			$data['activeMenu']   = 'testimonials_list';
			$data['page']         = 'backEnd/admin/testimonials_list';
			$data['testimonials'] = $this->db->order_by('priority','desc')->get('tbl_testimonials')->result();

		}elseif ($param1 == 'edit' && $param2 > 0) {

			$data['edit_info'] = $this->db->get_where('tbl_testimonials',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info']    = $data['edit_info']->row();
				$data['edit_info_id'] = $param2;

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$testimonials_update['name']        = $this->input->post('name', true);
				$testimonials_update['position']    = $this->input->post('position', true);
				$testimonials_update['priority']    = $this->input->post('priority', true);
				$testimonials_update['description'] = $this->input->post('description', true);

				if (!empty($_FILES["photo"]['name'])){

					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/testimonialsPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$testimonials_update['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($testimonials_update['photo'], 120, 120);
					}
				}

				if ($this->AdminModel->testimonials_update($testimonials_update, $param2)) {

					$this->session->set_flashdata('message','Testimonials Updated Successfully!');
					redirect('admin/testimonials/edit/'.$param2,'refresh');

				} else {

					$this->session->set_flashdata('message','Testimonials Update Failed!');
					redirect('admin/testimonials/edit/'.$param2,'refresh');

				}

			}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/testimonials/list','refresh');

			}
			

			$data['title']      = 'Testimonials Update';
			$data['activeMenu'] = 'testimonials_edit';
			$data['page']       = 'backEnd/admin/testimonials_edit';

		}elseif ($param1 == 'delete' && $param2 > 0) {

			if ($this->AdminModel->testimonials_delete($param2)) {

				$this->session->set_flashdata('message','Testimonials Deleted Successfully!');
				redirect('admin/testimonials/list','refresh');

			} else {

				$this->session->set_flashdata('message','Testimonials Delete Failed!');
				redirect('admin/testimonials/list','refresh');

			}

		}

		$this->load->view('backEnd/master_page',$data);
	}

	public function red_alert($param1 = "", $param2 = "", $param3 = "") {
		
		$data['title']      = 'Red Alert • Red Alert';
		$data['page']       = 'backEnd/admin/red_alert';
		$data['activeMenu'] = 'red_alert';
 
		if ($param1 == "add") {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_data['message']        = $this->input->post('message', true);

				$insert_data['start_datetime'] = date_format(date_create($this->input->post('start_date', true)), "Y-m-d") . ' ' . date_format(date_create($this->input->post('start_time', true)), "H:i") . ':00';

				$insert_data['end_datetime']   = date_format(date_create($this->input->post('end_date', true)), "Y-m-d") . ' ' . date_format(date_create($this->input->post('end_time', true)), "H:i") . ':00';

				$insert_data['color']          = $this->input->post('color', true);

				$this->db->insert('tbl_red_alert', $insert_data);
				$this->session->set_flashdata('message', 'Red Alert Info Saved Successfully!');
				redirect('admin/red_alert', 'refresh');
			}

		} else if ($param1 == "delete" && $param2 > 0) {
			
			$this->db->where('id', $param2)->delete('tbl_red_alert');
			$this->session->set_flashdata('message', 'Red Alert Info Deleted Successfully.');
			redirect('admin/red_alert', 'refresh');
			
		}
		
		$data['alert_info'] = $this->db->order_by('id', 'desc')->get('tbl_red_alert')->result();
		
		$this->load->view('backEnd/master_page', $data);
	}

	public function packages($param1 = 'add', $param2 = '', $param3 = '')
    {
    	if ($param1 == 'add') {

    		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    			$insert_package['title']       = $this->input->post('title', true);
    			$insert_package['priority']    = $this->input->post('priority', true);
    			$insert_package['body']        = $this->input->post('body');
    			$insert_package['insert_by']   = $_SESSION['userid'];
    			$insert_package['insert_time'] = date('Y-m-d H:i:s');

    			if (!empty($_FILES["photo"]['name'])){

						//exta work
						$path_parts                 = pathinfo($_FILES["photo"]['name']);
						$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
						$dir                        = date("YmdHis", time());
						$config_c['file_name']      = $newfile_name . '_' . $dir;
						$config_c['remove_spaces']  = TRUE;
						$config_c['upload_path']    = 'assets/packagePhoto/';
						$config_c['max_size']       = '20000'; //  less than 20 MB
						$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

						$this->load->library('upload', $config_c);
						$this->upload->initialize($config_c);
						if (!$this->upload->do_upload('photo')) {

						} else {

							$upload_c = $this->upload->data();
							$insert_package['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
							$this->image_size_fix($insert_package['photo'], 328, 283);
						}
					}

					if ($this->AdminModel->add_package($insert_package)) {

						$this->session->set_flashdata('message','Package Added Successfully!');
						redirect('admin/packages/add','refresh');

					} else {

						$this->session->set_flashdata('message','Package Add Failed!');
						redirect('admin/packages/add','refresh');

					}

    		}

    		$data['title']      = 'Package Add';
    		$data['activeMenu'] = 'package_add';
    		$data['page']       = 'backEnd/admin/package_add';

    	}elseif ($param1 == 'list') {

    		$data['title']      = 'Package List';
    		$data['activeMenu'] = 'package_list';
    		$data['page']       = 'backEnd/admin/package_list';
    		$data['packages']   = $this->db->order_by('priority','desc')->get('tbl_packages')->result();

    	}elseif ($param1 == 'edit' && $param2 > 0) {

    		$data['edit_info']  = $this->db->get_where('tbl_packages',array('id'=>$param2));

    		if ($data['edit_info']->num_rows() > 0) {

    			$data['edit_info']    = $data['edit_info']->row();
    			$data['edit_info_id'] = $param2;

    			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	    			$update_package['title']    = $this->input->post('title', true);
	    			$update_package['priority'] = $this->input->post('priority', true);
	    			$update_package['body']     = $this->input->post('body');

	    			if (!empty($_FILES["photo"]['name'])){

							//exta work
							$path_parts                 = pathinfo($_FILES["photo"]['name']);
							$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
							$dir                        = date("YmdHis", time());
							$config_c['file_name']      = $newfile_name . '_' . $dir;
							$config_c['remove_spaces']  = TRUE;
							$config_c['upload_path']    = 'assets/packagePhoto/';
							$config_c['max_size']       = '20000'; //  less than 20 MB
							$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

							$this->load->library('upload', $config_c);
							$this->upload->initialize($config_c);
							if (!$this->upload->do_upload('photo')) {

							} else {

								$upload_c = $this->upload->data();
								$update_package['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
								$this->image_size_fix($update_package['photo'], 328, 283);
							}
						}

					if ($this->AdminModel->package_update($update_package, $param2)) {

						$this->session->set_flashdata('message','Package Updated Successfully!');
						redirect('admin/packages/list','refresh');

					} else {

						$this->session->set_flashdata('message','Package Update Failed!');
						redirect('admin/packages/list','refresh');

					}

    			}

    		} else {

    			$this->session->set_flashdata('message','Wrong Attempt!');
    			redirect('admin/packages/list','refresh');

    		}
    		
    		$data['title']      = 'Package Update';
    		$data['activeMenu'] = 'package_edit';
    		$data['page']       = 'backEnd/admin/package_edit';

    	}elseif ($param1 == 'delete' && $param2 > 0) {

    		if ($this->AdminModel->package_delete($param2)) {

				$this->session->set_flashdata('message','Package Deleted Successfully!');
				redirect('admin/packages/list','refresh');

			} else {

				$this->session->set_flashdata('message','Package Delete Failed!');
				redirect('admin/packages/list','refresh');

			}

    	}

    	$this->load->view('backEnd/master_page',$data);
    	
    }

    public function portfolio($param1 = '', $param2 = '', $param3 = '')
	{

		if ($param1 == 'add') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_portfolio['title']       = $this->input->post('title', true);
				$insert_portfolio['priority']    = $this->input->post('priority', true);
				$insert_portfolio['category']    = $this->input->post('category', true);
				$insert_portfolio['insert_by']   = $_SESSION['userid'];
				$insert_portfolio['insert_time'] = date('Y-m-d H:i:s');

				if (!empty($_FILES["photo"]['name'])){

					//exta work
					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/portfolioPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$insert_portfolio['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($insert_portfolio['photo'], 400, 400);
					}
				}

				if ($this->AdminModel->portfolio_add($insert_portfolio)) {

					$this->session->set_flashdata('message',"Portfolio Add Successfully!");
					redirect('admin/portfolio','refresh');

				} else {

					$this->session->set_flashdata('message',"Portfolio Add Failed");
					redirect('admin/portfolio','refresh');
				}
			}

		} elseif ($param1 == 'edit' && $param2 >0) {

			$data['edit_info'] = $this->db->get_where('tbl_portfolio',array('id'=>$param2));

			if ($data['edit_info']->num_rows() >0) {

				$data['edit_info']    = $data['edit_info']->row();
				$data['edit_info_id'] = $param2;

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$Update_portfolio['title']       = $this->input->post('title', true);
				$Update_portfolio['priority']    = $this->input->post('priority', true);
				$Update_portfolio['category']    = $this->input->post('category', true);

				if (!empty($_FILES["photo"]['name'])){

					//exta work
					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/portfolioPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$Update_portfolio['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($Update_portfolio['photo'], 400, 400);
					}
				}

				if ($this->AdminModel->portfolio_update($Update_portfolio,$param2)) {

					$this->session->set_flashdata('message',"Portfolio Updated Successfully!");
					redirect('admin/portfolio','refresh');

				} else {

					$this->session->set_flashdata('message',"Portfolio Update Failed");
					redirect('admin/portfolio','refresh');
				}
			}

			} else {

				$this->session->set_flashdata('message',"Wrong Attempt!");
				redirect('admin/portfolio','refresh');

			}
			

		} elseif ($param1 == 'delete' && $param2 >0) {

			if ($this->AdminModel->portfolio_delete($param2)) {

				$this->session->set_flashdata('message',"Portfolio Deleted Successfully!");
				redirect('admin/portfolio','refresh');

			} else {

				$this->session->set_flashdata('message',"Portfolio Delete Failed");
				redirect('admin/portfolio','refresh');
			}

		}
		
		$data['title']      = 'Portfolio';
		$data['activeMenu'] = 'portfolio';
		$data['page']       = 'backEnd/admin/portfolio';
		$data['portfolio']  = $this->db->order_by('priority','desc')->get('tbl_portfolio')->result();
		$this->load->view('backEnd/master_page',$data);
	}

	public function blog($param1 = 'add', $param2 = '', $param3 = '')
	{
		if ($param1 == 'add') {

			$data['title']      = 'Blog Add';
			$data['activeMenu'] = 'blog_add';
			$data['page']       = 'backEnd/admin/blog_add';

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_blog['title']       = $this->input->post('title', true);
				$insert_blog['body']        = $this->input->post('body');
				$insert_blog['insert_by']   = $_SESSION['userid'];
				$insert_blog['insert_time'] = date('Y-m-d H:i:s');
				$insert_blog['date']        = date('Y-m-d',strtotime($this->input->post('date', true)));

				if (!empty($_FILES["photo"]['name'])){

					//exta work
					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/blogPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$insert_blog['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($insert_blog['photo'], 350, 350);
					}
				}

				if ($this->AdminModel->blog_add($insert_blog)) {

					$this->session->set_flashdata('message',"Blog Add Successfully!");
					redirect('admin/blog','refresh');

				} else {

					$this->session->set_flashdata('message',"Blog Add Failed");
					redirect('admin/blog','refresh');
				}
				
			}

		}elseif ($param1 == 'list') {

			$data['title']      = 'Blog List';
			$data['activeMenu'] ='blog_list';
			$data['page']       = 'backEnd/admin/blog_list';
			$data['blogs']      = $this->AdminModel->get_blogs();

		}elseif ($param1 == 'edit' && $param2 > 0) {

			$data['title']      = 'Blog Update';
			$data['activeMenu'] ='blog_edit';
			$data['page']       = 'backEnd/admin/blog_edit';
			$data['edit_info']  = $this->db->get_where('tbl_blog',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info']    = $data['edit_info']->row();
				$data['edit_info_id'] = $param2;

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_blog['title']= $this->input->post('title', true);
					$update_blog['body'] = $this->input->post('body');
					$update_blog['date'] = date('Y-m-d',strtotime($this->input->post('date', true)));

					if (!empty($_FILES["photo"]['name'])){

						//exta work
						$path_parts                 = pathinfo($_FILES["photo"]['name']);
						$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
						$dir                        = date("YmdHis", time());
						$config_c['file_name']      = $newfile_name . '_' . $dir;
						$config_c['remove_spaces']  = TRUE;
						$config_c['upload_path']    = 'assets/blogPhoto/';
						$config_c['max_size']       = '20000'; //  less than 20 MB
						$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

						$this->load->library('upload', $config_c);
						$this->upload->initialize($config_c);
						if (!$this->upload->do_upload('photo')) {

						} else {

							$upload_c = $this->upload->data();
							$update_blog['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
							$this->image_size_fix($update_blog['photo'], 350, 350);
						}
					}

					if ($this->AdminModel->blog_update($update_blog,$param2)) {

						$this->session->set_flashdata('message',"Blog Update Successfully!");
						redirect('admin/blog/list','refresh');

					} else {

						$this->session->set_flashdata('message',"Blog Update Failed");
						redirect('admin/blog/list','refresh');
					}
					
				}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/blog/list','refresh');
			}
			

		}elseif($param1 == 'delete' && $param2 > 0){

			if ($this->AdminModel->blog_delete($param2)) {

					$this->session->set_flashdata('message',"Blog Delete Successfully!");
					redirect('admin/blog/list','refresh');

				} else {

					$this->session->set_flashdata('message',"Blog Delete Failed");
					redirect('admin/blog/list','refresh');
				}
		}

		$this->load->view('backEnd/master_page',$data);
	}

	public function teammember($param1 = '', $param2 = '', $param3 = '')
    {

    	if ($param1 == 'add') {

    		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    			$insert_teammember['name']        = $this->input->post('name', true);
    			$insert_teammember['designation'] = $this->input->post('designation', true);
    			$insert_teammember['facebook']    = $this->input->post('facebook', true);
    			$insert_teammember['twitter']     = $this->input->post('twitter', true);
    			$insert_teammember['insert_by']   = $_SESSION['userid'];
    			$insert_teammember['insert_time'] = date('Y-m-d H:i:s');

    			if (!empty($_FILES["photo"]['name'])){

					//exta work
					$path_parts                 = pathinfo($_FILES["photo"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config_c['file_name']      = $newfile_name . '_' . $dir;
					$config_c['remove_spaces']  = TRUE;
					$config_c['upload_path']    = 'assets/teamPhoto/';
					$config_c['max_size']       = '20000'; //  less than 20 MB
					$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

					$this->load->library('upload', $config_c);
					$this->upload->initialize($config_c);
					if (!$this->upload->do_upload('photo')) {

					} else {

						$upload_c = $this->upload->data();
						$insert_teammember['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
						$this->image_size_fix($insert_teammember['photo'], 400, 400);
					}
				}

				$add_team = $this->db->insert('tbl_teammember',$insert_teammember);

				if ($add_team) {

					$this->session->set_flashdata('message',"Teammember Added Successfully!");
					redirect('admin/teammember','refresh');

				} else {

					$this->session->set_flashdata('message',"Teammember Add Failed");
					redirect('admin/teammember','refresh');
				}

    		}

    	}elseif ($param1 == 'edit' && $param2 > 0) {

    		$data['edit_info'] = $this->db->get_where('tbl_teammember',array('id'=>$param2));
    		if ($data['edit_info']->num_rows() > 0) {

    			$data['edit_info']    = $data['edit_info']->row();
    			$data['edit_info_id'] = $param2;


    			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	    			$update_teammember['name']        = $this->input->post('name', true);
	    			$update_teammember['designation'] = $this->input->post('designation', true);
	    			$update_teammember['facebook']    = $this->input->post('facebook', true);
	    			$update_teammember['twitter']     = $this->input->post('twitter', true);

	    			if (!empty($_FILES["photo"]['name'])){

						//exta work
						$path_parts                 = pathinfo($_FILES["photo"]['name']);
						$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
						$dir                        = date("YmdHis", time());
						$config_c['file_name']      = $newfile_name . '_' . $dir;
						$config_c['remove_spaces']  = TRUE;
						$config_c['upload_path']    = 'assets/teamPhoto/';
						$config_c['max_size']       = '20000'; //  less than 20 MB
						$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

						$this->load->library('upload', $config_c);
						$this->upload->initialize($config_c);
						if (!$this->upload->do_upload('photo')) {

						} else {

							$upload_c = $this->upload->data();
							$update_teammember['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
							$this->image_size_fix($update_teammember['photo'], 400, 400);
						}
					}

				;

					if ($this->AdminModel->teammember_update($update_teammember,$param2)) {

						$this->session->set_flashdata('message',"Teammember Updated Successfully!");
						redirect('admin/teammember/edit/'.$param2,'refresh');

					} else {

						$this->session->set_flashdata('message',"Teammember Update Failed");
						redirect('admin/teammember/edit/'.$param2,'refresh');
					}

	    		}

    		} else {

    			$this->session->set_flashdata('message',"Wrong Attempt!");
				redirect('admin/teammember','refresh');

    		}
    		

    	}elseif ($param1 == 'delete' && $param2 > 0) {

    		if ($this->AdminModel->teammember_delete($param2)) {

						$this->session->set_flashdata('message',"Teammember Deleted Successfully!");
						redirect('admin/teammember','refresh');

					} else {

						$this->session->set_flashdata('message',"Teammember Delete Failed");
						redirect('admin/teammember','refresh');
					}

    	}

    	$data['title']       = "Teammember";
    	$data['activeMenu']  = 'teammember';
    	$data['page']        = 'backEnd/admin/teammember';
    	$data['teammembers'] = $this->db->order_by('id','desc')->get('tbl_teammember')->result();
    	$this->load->view('backEnd/master_page',$data);
    }


}
