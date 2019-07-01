<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->lang->load('content', $_SESSION['lang']);

        if (!isset($_SESSION['user_auth']) || $_SESSION['user_auth'] != true) {
            redirect('login', 'refresh');
        }
        if ($_SESSION['userType'] != 'user')
            redirect('login', 'refresh');

        $this->load->model('AdminModel');
        $this->load->library("pagination");
        $this->load->helper("url");
        $this->load->helper("text");
        date_default_timezone_set("Asia/Dhaka");
    }

    public function index() {


        $user_id = $this->session->userdata('userid');

        $data['title'] = 'Admin Panel • HRSOFTBD News Portal Admin Panel';
        $data['page'] = 'backEnd/user/user_dashboard';
        $data['activeMenu'] = 'dashboard_view';

        $this->load->view('backEnd/master_page', $data);
    }

    public function get_zilla_from_division() {

        $divission_data['divission_id'] = $this->input->post('divission_id');
        $divission_data['distrcts'] = $this->db->get_where('tbl_zilla', array('divission_id' => $divission_data['divission_id']))->result_Array();

        $this->load->view('backEnd/' . $_SESSION['userType'] . '/get_zilla_from_division', $divission_data);
    }

    public function get_upozilla_from_division_and_zilla() {

        $district_data['divission_id'] = $this->input->post('divission_id');
        $district_data['district_id'] = $this->input->post('district_id');

        $district_data['upozilla'] = $this->db->get_where('tbl_upozilla', array('division_id' => $district_data['divission_id'], 'zilla_id' => $district_data['district_id']))->result_Array();

        $this->load->view('backEnd/' . $_SESSION['userType'] . '/get_upozilla_from_division_and_zilla', $district_data);
    }

    public function profile($param1 = '') {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $old_password = sha1($this->input->post('old_password'));
            $new_password = sha1($this->input->post('new_password'));
            $user_id = $this->input->post('user_id');

            $user_query = $this->db->get_where('user', array('id' => $user_id, 'password' => $old_password));
            $user_exist = $user_query->num_rows();

            //if user exist
            if ($user_exist > 0) {

                $this->db->where('id', $user_id);
                $this->db->update('user', array('password' => $new_password));

                $this->session->set_flashdata('message', 'Data Updated Successfully');
            }

            $config['upload_path'] = 'assets/userPhoto/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '116';

            //load upload class library
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userphoto')) {
                // case - failure
                $upload_error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', "Failed to upload image.");
            } else {
                // case - success
                $old_photo_info = $this->db->get_where('user', array('id' => $user_id))->row();
                if (isset($old_photo_info->photo)) {
                    unlink($old_photo_info->photo);
                }

                $upload_data = $this->upload->data();
                $userphoto_path = $config['upload_path'] . $upload_data['file_name'];
                //update new path delete old path
                $this->db->where('id', $user_id);
                $this->db->update('user', array('photo' => $userphoto_path));

                $this->session->set_userdata('userPhoto', $userphoto_path);
                $this->session->set_flashdata('message', $this->lang->line("upload_success"));
            }
            redirect($_SESSION['userType'] . '/profile', 'refresh');
        }

        $data['user_info'] = $this->db->get_where('user', array('id' => $_SESSION['userid'], 'username' => $_SESSION['username']))->row();

        $data['title'] = 'Change Progile Admin Panel • HRSOFTBD News Portal Admin Panel';

        $data['page'] = 'backEnd/' . $_SESSION['userType'] . '/profile';
        $data['activeMenu'] = '';

        $this->load->view('backEnd/master_page', $data);
    }

}
