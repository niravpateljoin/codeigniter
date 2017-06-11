<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    function __construct() {
        parent::__construct();
		$this->load->model('admin/m_login','',TRUE);
       // $this->load->model(array('admin/m_login','admin/zip_model','admin/designation_model','admin/contact_model','admin/city_model'));
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['title'] = "Dashboard";
            $data['count_admin'] = $this->m_login->count_admin();
            $data['count_user'] = $this->m_login->count_user();
            $data['count_religion'] = $this->m_login->count_religion();
            $data['count_mother'] = $this->m_login->count_mother();         
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/footer', $data);
        } else {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
    }
 
 
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
