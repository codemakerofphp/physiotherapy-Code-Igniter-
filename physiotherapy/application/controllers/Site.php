<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $menu;

    function __construct() {

        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->helper('text');
//        error_reporting(0);
    }

    public function index() {

       
        $data['contents'] = 'frontend/index';
        $data['sliders']  = $this->db->order_by('priority','desc')->limit('3')->get('tbl_slider')->result();

        $data['packages']  = $this->db->order_by('priority','desc')->limit('4')->get('tbl_packages')->result();

        $data['blogs']     = $this->db->order_by('id','desc')->limit('3')->get('tbl_blog')->result();
       
        $data['teams']     = $this->db->order_by('id','desc')->get('tbl_teammember')->result();

        $data['portfolio'] = $this->db->order_by('priority','desc')->get('tbl_portfolio')->result();

        $data['about_us']                    = $this->db->where('name','about-us')->get('tbl_common_pages')->row();

        $data['ankle_sprains_and_treatment'] = $this->db->where('name','ankle-sprains-and-tr')->get('tbl_common_pages')->row();

        $data['knee_pain_exercises']         = $this->db->where('name','knee-pain-exercises')->get('tbl_common_pages')->row();

        $data['back_pain_exercises']         = $this->db->where('name','back-pain-exercises')->get('tbl_common_pages')->row();

        $data['foot_pain_exercises']         = $this->db->where('name','foot-pain-exercises')->get('tbl_common_pages')->row();

        $data['service_title_one']           = $this->db->where('name','service-title-one')->get('tbl_general')->row()->value;

        $data['healthzone_features_title']    = $this->db->where('name','healthzone-features-title')->get('tbl_general')->row()->value;

        $data['healthzone_features_body']     = $this->db->where('name','healthzone-features-body')->get('tbl_general')->row()->value;

        $data['service_title_two']            = $this->db->where('name','service-title-two')->get('tbl_general')->row()->value;

        $data['service_title_body']           = $this->db->where('name','service-title-body')->get('tbl_general')->row()->value;

        $data['healthzone_gallery_title_one'] = $this->db->where('name','healthzone-gallery-title-one')->get('tbl_general')->row()->value;

        $data['healthzone_gallery_title_two'] = $this->db->where('name','healthzone-gallery-title-two')->get('tbl_general')->row()->value;

        $data['team_title_one']               = $this->db->where('name','team-title-one')->get('tbl_general')->row()->value;

        $data['team_title_two']               = $this->db->where('name','team-title-two')->get('tbl_general')->row()->value;

        


        $this->load->view('frontend/welcome', $data);
    }

    

    public function about_us() {

        $data['teams']      = $this->db->order_by('id','desc')->get('tbl_teammember')->result();
        $data['about_us']   = $this->db->where('name','about-us')->get('tbl_common_pages')->row();
        
        $data['who_we_are'] = $this->db->where('name','who-we-are')->get('tbl_common_pages')->row();

        $data['what_we_do'] = $this->db->where('name','what-we-do')->get('tbl_common_pages')->row();

        $data['packages']   = $this->db->order_by('priority','desc')->limit('6')->get('tbl_packages')->result();

        $data['team_title_one']     = $this->db->where('name','team-title-one')->get('tbl_general')->row()->value;

        $data['team_title_two']     = $this->db->where('name','team-title-two')->get('tbl_general')->row()->value;

        $data['service_title_body'] = $this->db->where('name','service-title-body')->get('tbl_general')->row()->value;

        $data['contents'] = 'frontend/about_us';
        $this->load->view('frontend/welcome', $data);

    }
    public function services() {

        $data['packages'] = $this->db->order_by('priority','desc')->get('tbl_packages')->result();

        $data['contents'] = 'frontend/service';
        $this->load->view('frontend/welcome', $data);

    }
    public function blog() {

        $data['blogs']    = $this->db->order_by('id','desc')->get('tbl_blog')->result();

        $data['contents'] = 'frontend/blog';
        $this->load->view('frontend/welcome', $data);

    }
    
    public function contact() {

        $data['our_office_location_title']     = $this->db->where('name','our-office-location-title')->get('tbl_general')->row()->value;

        $data['our_office_location_value']     = $this->db->where('name','our-office-location-value')->get('tbl_general')->row()->value;

        $data['contact_number_title']          = $this->db->where('name','contact-number-title')->get('tbl_general')->row()->value;

        $data['contact_number_value']          = $this->db->where('name','contact-number-value')->get('tbl_general')->row()->value;

        $data['email_address_title']           = $this->db->where('name','email-address-title')->get('tbl_general')->row()->value;

        $data['email_address_value']           = $this->db->where('name','email-address-value')->get('tbl_general')->row()->value
        ;
        $data['make_video_call_title']         = $this->db->where('name','make-video-call-title')->get('tbl_general')->row()->value;

        $data['make_video_call_value']         = $this->db->where('name','make-video-call-value')->get('tbl_general')->row()->value;


        $data['contents'] = 'frontend/contact';
        $this->load->view('frontend/welcome', $data);

    }
    
    public function services_details($param1) {

        $data['detail_service'] = $this->db->get_where('tbl_packages',array('id'=>$param1));

        if ($data['detail_service']->num_rows() > 0) {

            $data['packages']       = $this->db->order_by('id','desc')->get('tbl_packages')->result();
            $data['blogs']          = $this->db->order_by('id','desc')->limit('3')->get('tbl_blog')->result();
            $data['detail_service'] = $data['detail_service']->row();

            $data['contents']       = 'frontend/services-details';
            $this->load->view('frontend/welcome', $data);

        }else{

           echo "Page Not Found"; 
        }

        

    }

    public function blog_details($param1) {

        $data['detail_blog'] = $this->db->get_where('tbl_blog',array('id'=>$param1));

        if ($data['detail_blog']->num_rows() > 0) {

            $data['detail_blog'] = $data['detail_blog']->row();

            $data['packages']    = $this->db->order_by('id','desc')->get('tbl_packages')->result();
            $data['contents']    = 'frontend/blog-detail';
            $this->load->view('frontend/welcome', $data);

        }else{

             echo "Page Not Found"; 
        }

        
    }

    public function our_mission()
    {
        $data['common_page_data'] = $this->db->where('name','our-mission')->get('tbl_common_pages');

        if ($data['common_page_data']->num_rows() > 0) {

            $data['common_page_data'] = $data['common_page_data']->row();

            $data['contents']    = 'frontend/common_page';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }  
         
    }

    public function our_vision()
    {
        $data['common_page_data'] = $this->db->where('name','our-vission')->get('tbl_common_pages');

        if ($data['common_page_data']->num_rows() > 0) {

            $data['common_page_data'] = $data['common_page_data']->row();

            $data['contents']    = 'frontend/common_page';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }        
    }

    public function terms_policy()
    {
        $data['common_page_data'] = $this->db->where('name','terms-policy')->get('tbl_common_pages');

        if ($data['common_page_data']->num_rows() > 0) {

            $data['common_page_data'] = $data['common_page_data']->row();

            $data['contents']     = 'frontend/common_page';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }        
    }

    public function training()
    {
        $data['common_page_data'] = $this->db->where('name','training')->get('tbl_common_pages');

        if ($data['common_page_data']->num_rows() > 0) {

            $data['common_page_data'] = $data['common_page_data']->row();

            $data['contents'] = 'frontend/common_page';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }        
    }

    public function faq()
    {
        $data['common_page_data'] = $this->db->where('name','faq')->get('tbl_common_pages');

        if ($data['common_page_data']->num_rows() > 0) {

            $data['common_page_data']      = $data['common_page_data']->row();

            $data['contents'] = 'frontend/common_page';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }        
    }

    public function manage_query($param1 = '', $param2 = '', $param3 = '')
    {
        if ($param1 == 'add') {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $insert_query['name']         = $this->input->post('name', true);
                $insert_query['email']        = $this->input->post('email', true);
                $insert_query['phone']        = $this->input->post('phone', true);
                $insert_query['address']      = $this->input->post('address', true);
                $insert_query['message_body'] = $this->input->post('message_body', true);

                $temp_name         = trim($insert_query['name'], ' ');
                $temp_email        = trim($insert_query['email'], ' ');
                $temp_phone        = trim($insert_query['phone'], ' ');
                $temp_address      = trim($insert_query['address'], ' ');
                $temp_message_body = trim($insert_query['message_body'], ' ');

                if (strlen($temp_name) > 5 && strlen($temp_email) > 5 && strlen($temp_phone) > 5 && strlen($temp_address) > 5 && strlen($temp_message_body) > 5 ) {

                    $this->db->insert('tbl_contact_manage',$insert_query);
                    redirect (base_url(), 'refresh');

                }else{
                    
                }

            }
        }
    }

    public function silder_details($param1)
    {
        $data['slider_single_value'] = $this->db->get_where('tbl_slider',array('id'=>$param1));
        if ($data['slider_single_value']->num_rows() > 0) {

            $data['slider_single_value'] = $data['slider_single_value']->row();

            $data['packages']            = $this->db->order_by('id','desc')->get('tbl_packages')->result();
            
            $data['blogs']               = $this->db->order_by('id','desc')->limit('3')->get('tbl_blog')->result();

            $data['contents']            = 'frontend/slider_details';
            $this->load->view('frontend/welcome', $data);

        }else{

            echo "Page Not Found";
        }
    }

}
