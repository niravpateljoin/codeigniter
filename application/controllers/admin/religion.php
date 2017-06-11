<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class religion extends CI_Controller
{
	
    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/religion_model','',TRUE);
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
            $data['icon'] = "glyphicon glyphicon-magnet";
            $data['title'] = "Religion Managment";
            $data['filename'] = "religion";
            $data['addnew'] = "Add New Religion";
            $data['thfirst'] = "Religion";
            $data['colfirst'] = "religion_name";
            //$data['edit'] = "show_issue";
             
            $adminid = $data['id']; 
            $data['tablerow'] = $this->religion_model->getreligion();
            
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
			$data['title'] = "Religion Managment";
			$did = $this->uri->segment(4);			
   		    $data['Delete_religion'] = $this->religion_model->getDeleteview($did); 
   		       		       		     
			if($data['Delete_religion'] == true)
			{
				 redirect('admin/religion/index/1', 'location');
			}
			else
			{
				redirect('admin/religion/index/0', 'location');
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
			$this->religion_model->edit_religion($sid);
			redirect('admin/religion', 'refresh');			
		}	
		
		 if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit Religion Management";
            $data['edit_religion'] = $this->religion_model->show_religion($sid);  

   		           
           $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/religionchange',$data);
         
		   
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
			$this->religion_model->getadd();
			redirect('admin/religion', 'refresh');	 			
		}	
		
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			  
			$data['title'] = "Add Religion Management";
                            
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);                      
          $this->load->view('admin/religionchange',$data);
          
		   
			$this->load->view('admin/footer',$data);
		}
		else 
        {
            redirect('admin/c_login', 'refresh');
        }
	}
	
    
}

