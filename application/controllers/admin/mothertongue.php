<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mothertongue extends CI_Controller
{
	
    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/mothertongue_model','',TRUE);
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
            $data['icon'] = "glyphicon glyphicon-certificate";
            $data['title'] = "Mothertongue Managment";
            $data['filename'] = "mothertongue";
            $data['addnew'] = "Add New Mothertongue";
            $data['thfirst'] = "Mother-Tongue";
            $data['colfirst'] = "mother_name";
            //$data['edit'] = "show_issue";
             
            $adminid = $data['id']; 
            $data['tablerow'] = $this->mothertongue_model->getmothertongue();
            
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
			$data['title'] = "Mothertongue Managment";
			$did = $this->uri->segment(4);			
   		    $data['Delete_mothertongue'] = $this->mothertongue_model->getDeleteview($did); 
   		       		       		     
			if($data['Delete_mothertongue'] == true)
			{
				 redirect('admin/mothertongue/index/1', 'location');
			}
			else
			{
				redirect('admin/mothertongue/index/0', 'location');
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
			$this->mothertongue_model->edit_mothertongue($sid);
			redirect('admin/mothertongue', 'refresh');			
		}	
		
		 if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit Mothertongue Management";
            $data['edit_mothertongue'] = $this->mothertongue_model->show_mothertongue($sid);  

   		           
           $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/mothertonguechange',$data);
         
		   
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
			$this->mothertongue_model->getadd();
			redirect('admin/mothertongue', 'refresh');	 			
		}	
		
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			  
			$data['title'] = "Add Mothertongue Management";
                            
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);                      
          $this->load->view('admin/mothertonguechange',$data);
          
		   
			$this->load->view('admin/footer',$data);
		}
		else 
        {
            redirect('admin/c_login', 'refresh');
        }
	}
	
    
}

