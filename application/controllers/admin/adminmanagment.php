<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmanagment extends CI_Controller
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
    
    function index($msg=0) 
    {
		if($this->session->userdata('logged_in'))
        {
            //$this->load->model('admin/profile',TRUE);
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['title'] = "Admin Management";
            $data['icon'] = "glyphicon glyphicon-user";
            $data['filename'] = "adminmanagment";
            $data['addnew'] = "Add New Admin";
            $data['thfirst'] = "Firstname";
            $data['thsecond'] = "Lastname";
            $data['ththird'] = "Username";
             $data['colfirst'] = "firstname";
            $data['colsecond'] = "lastname";
            $data['colthird'] = "username";
           // $data['edit'] = "show_admin";
            $adminid = $data['id']; 
           // $data['ide'] = $this->m_login->getProfile();
            $data['tablerow'] = $this->m_login->getAdmin($adminid);
            
            if($msg == 1)
				$data['error'] = 1;
             
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/list', $data);
            $this->load->view('admin/footer', $data);
        } else {
        //If no session, redirect to login page
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
			$data['title'] = "View Admin";
			$did = $this->uri->segment(4);			
   		    $data['Delete_admin'] = $this->m_login->getDeleteview($did); 
   		       		       		     
			if($data['Delete_admin'] == true)
			{
				 redirect('admin/adminmanagment/index/1', 'location');
			}
			else
			{
				redirect('admin/adminmanagment/index/0', 'location');
			}
		}
		else 
        {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }		 
	}
	
	function edit($sid)    
    {		  
		if($this->input->post())
		{
		/*	$query = $this->db->query('select * from admin where username = "'.$this->input->post('username').'" and id != "'.$sid.'" ') or die(mysql_error());
			$query1 = $this->db->query('select * from admin where email = "'.$this->input->post('email').'" and id != "'.$sid.'" ') or die(mysql_error());
			
			if($query1->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_email','Email already exist');	
			redirect('admin/adminmanagment/edit/'.$sid.'');
		    }
		    
		    if($query->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_username','Username already exist');	
			redirect('admin/adminmanagment/edit/'.$sid.'');
		    } */
		    
			$this->m_login->edit_admin($sid);
		    redirect('admin/adminmanagment', 'refresh');	
		    
	    }	
	    
		 if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit Admin";
            $data['edit_admin'] = $this->m_login->show_admin($sid);  
                   
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/adminchange',$data);
          
			$this->load->view('admin/footer',$data);
		}
		else 
        {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
	}
	
	
	function add()    
    {	
		
	    
	    if($this->input->post())
		{
		/*	$query = $this->db->query('select * from admin where username = "'.$this->input->post('username').'" ') or die(mysql_error());
			$query1 = $this->db->query('select * from admin where email = "'.$this->input->post('email').'" ') or die(mysql_error());
			
			if($query1->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_email','Email already exist');	
			
			redirect('admin/adminmanagment/add');
		    }
		    
		    if($query->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_username','Username already exist');	
			redirect('admin/adminmanagment/add');
		    }
		    */ 
		    
			$this->m_login->getadd();
		    redirect('admin/adminmanagment', 'refresh');	
		    
	    }
	    	
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			//$data['adid'] = $this->uri->segment(4);  
			$data['title'] = "Add New Admin";
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);                      
          $this->load->view('admin/adminchange',$data); 
		  $this->load->view('admin/footer',$data);
		}
		else 
        {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
	}
	
	function checkeditemail()
	{
		$query1 = $this->db->query('select * from admin where email = "'.$this->input->post('email').'" AND id != "'.$this->input->post('id').'"  ') or die(mysql_error());
		
		if($query1->num_rows() == 0)
		{			
			echo '0';	
		}
		else
		{
		    echo '1';	
		}
		
	}
	
	function checkedituser()
	{
		//echo 'select * from admin where username = "'.$this->input->post('username').'" AND id != "'.$this->input->post('id').'" ';
		$query1 = $this->db->query('select * from admin where username = "'.$this->input->post('username').'" AND id != "'.$this->input->post('id').'" ') or die(mysql_error());
		
		//echo 'Coint:'.$query1->num_rows();	exit;
		if($query1->num_rows() == 0)
		    {			
				echo '0';	
		    }
		    else		    
		    {
				echo '1';
			}
		    
		
	}
	
	function checkaddemail()
	{
		$query1 = $this->db->query('select * from admin where email = "'.$this->input->post('email').'" ') or die(mysql_error());
		
		if($query1->num_rows() == 0)
		{			
			echo '0';	
		}
		else
		{
		    echo '1';	
		}
		
	}
	
	function checkadduser()
	{
		$query1 = $this->db->query('select * from admin where username = "'.$this->input->post('username').'" ') or die(mysql_error());		
		if($query1->num_rows() == 0)
		{			
			echo '0';	
		}
		else		    
		{
			echo '1';
		}		    		
	}
	
    
    
  
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
