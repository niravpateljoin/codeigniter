<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	
    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/m_login','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
		//$this->load->model('admin/profile',TRUE);
		       //     $this->load->library("database");
    }
    
    function index() 
    {
		if($this->session->userdata('logged_in'))
        {
            //$this->load->model('admin/profile',TRUE);
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['title'] = "Profile";
            $data['icon'] = "glyphicon glyphicon-eye-open";
            $data['filename'] = "profile";
            
            $data['thfirst'] = "Firstname";
            $data['thsecond'] = "Lastname";
            $data['ththird'] = "Username";
             $data['colfirst'] = "firstname";
            $data['colsecond'] = "lastname";
            $data['colthird'] = "username";
           // $data['edit'] = "show_admin";
             
           // $data['ide'] = $this->m_login->getProfile();
            $data['tablerow'] = $this->m_login->getprofile();
            
            
             
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/profile', $data);
            $this->load->view('admin/footer', $data);
        } else {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
    }
  
    
	
	
	function edit()    
    {		  
		if($this->input->post())
		{
			$this->m_login->edit_profile();
		    redirect('admin/dashboard', 'refresh');	
		
	    }	
		 if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit Profile";
            $data['edit_profile'] = $this->m_login->show_profile();  
                   
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/profilechange',$data);
          
			$this->load->view('admin/footer',$data);
		}
		else 
        {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
	}
	
	
	   
  
}
