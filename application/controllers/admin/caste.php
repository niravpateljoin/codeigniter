<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caste extends CI_Controller
{
	
    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/caste_model','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
		
    }
    
    function index($msg=0) 
    {
		if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['icon'] = "glyphicon glyphicon-gift";
            $data['title'] = "Caste Managment";
            $data['filename'] = "caste";
            $data['addnew'] = "Add New Caste";
            $data['thfirst'] = "Religion";
            $data['thsecond'] = "Caste";
            $data['colfirst'] = "religion_name";
            $data['colsecond'] = "caste_name";
            //$data['edit'] = "show_issue";
             
            $adminid = $data['id']; 
            $data['tablerow'] = $this->caste_model->getcastereligion();
            
            if($msg == 1)
				$data['error'] = 1;
           // $data['lists'] =  $this->issue_model->getlist($title);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/list', $data);
            $this->load->view('admin/footer', $data);
        } else {
            redirect('admin/c_login', 'refresh');
        }
    }
    
    
    
    
    function delete($did)    
    {		  
		if($this->session->userdata('logged_in'))
        { 
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			$data['did'] = $this->uri->segment(4);  
			$data['title'] = "Caste Managment";
			$did = $this->uri->segment(4);			
   		    $data['Delete_caste'] = $this->caste_model->getDeleteview($did); 
   		       		       		     
			if($data['Delete_caste'] == true)
			{
				 redirect('admin/caste/index/1', 'location');
			}
			else
			{
				redirect('admin/caste/index/0', 'location');
			}
		}
		else 
        {
            redirect('admin/c_login', 'refresh');
        }		 
	}
	
	function edit($sid)    
    {		  
		if($this->input->post())
		{
			$this->caste_model->edit_caste($sid);
			redirect('admin/caste', 'refresh');			
		}	
		
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit Caste Management";
			$data['castes'] = $this->caste_model->getcaste();
            $data['edit_caste'] = $this->caste_model->show_caste($sid);  

   		           
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/castechange',$data);
         
		   
			$this->load->view('admin/footer',$data);
		}
		else 
        {
            redirect('admin/c_login', 'refresh');
        }
	}
	
	
	function add()    
    {	
		if($this->input->post())
		{
			$this->caste_model->getadd();
			redirect('admin/caste', 'refresh');	 			
		}	
		
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			  
			$data['title'] = "Add caste Management";
			$data['castes'] = $this->caste_model->getcaste();
                            
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);                      
          $this->load->view('admin/castechange',$data);
          
		   
			$this->load->view('admin/footer',$data);
		}
		else 
        {
            redirect('admin/c_login', 'refresh');
        }
	}
	
    
}

