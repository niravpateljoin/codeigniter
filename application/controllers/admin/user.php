<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	
    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/usermanage','',TRUE);
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
            $data['title'] = "User Management";
            $data['icon'] = "glyphicon glyphicon-user";
            $data['filename'] = "user";
            $data['addnew'] = "Add New User";
            $data['thfirst'] = "Email";
            $data['thsecond'] = "Username";
            $data['ththird'] = "Date Of Birth";
             $data['colfirst'] = "email";
            $data['colsecond'] = "username";
            $data['colthird'] = "dob";
           // $data['edit'] = "show_admin";
            $userid = $data['id']; 
           // $data['ide'] = $this->m_login->getProfile();
            $data['tablerow'] = $this->usermanage->getuser();
            
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
   		    $data['Delete_admin'] = $this->usermanage->getDeleteview($did); 
   		       		       		     
			if($data['Delete_admin'] == true)
			{
				 redirect('admin/user/index/1', 'location');
			}
			else
			{
				redirect('admin/user/index/0', 'location');
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
		/*	$query = $this->db->query('select * from user where username = "'.$this->input->post('username').'" and id != "'.$sid.'" ') or die(mysql_error());
			$query1 = $this->db->query('select * from user where email = "'.$this->input->post('email').'" and id != "'.$sid.'" ') or die(mysql_error());
			
			if($query1->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_email','Email already exist');
				
			redirect('admin/user/edit/'.$sid.'');
		    }
		    
		    if($query->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_username','Username already exist');	
			redirect('admin/user/edit/'.$sid.'');
		    }
		  */  
			$this->usermanage->edit_user($sid);
		    redirect('admin/user', 'refresh');	
		    
	    }	
			
	    
		 if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $sid = $this->uri->segment(4);
			$data['sid'] = $this->uri->segment(4);  
			$data['title'] = "Edit User";
            $data['edit_user'] = $this->usermanage->show_user($sid);  
           $data['profiles'] = $this->usermanage->getprofile(); 
           $data['religions'] = $this->usermanage->getreligion(); 
           $data['mothers'] = $this->usermanage->getmother(); 
           $data['livings'] = $this->usermanage->getliving();         
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);            
          $this->load->view('admin/userchange',$data);
          
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
		/*	$query = $this->db->query('select * from user where username = "'.$this->input->post('username').'" ') or die(mysql_error());
			$query1 = $this->db->query('select * from user where email = "'.$this->input->post('email').'" ') or die(mysql_error());
			
			if($query1->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_email','Email already exist');	
			
			redirect('admin/user/add');
		    }
		    
		    if($query->num_rows() > 0)
		    {			
			$this->session->set_userdata('invalid_username','Username already exist');	
			redirect('admin/user/add');
		    }
		 */  
		    
			$this->usermanage->getadd();
		    redirect('admin/user', 'refresh');	
		    
	    }
	    	
		if($this->session->userdata('logged_in'))
        {
			$session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
			//$data['adid'] = $this->uri->segment(4);  
			$data['title'] = "Add New User";
		  $data['profiles'] = $this->usermanage->getprofile(); 
           $data['religions'] = $this->usermanage->getreligion(); 
           $data['mothers'] = $this->usermanage->getmother(); 
           $data['livings'] = $this->usermanage->getliving();       
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar',$data);
          $this->load->view('admin/leftsidebar',$data);                      
          $this->load->view('admin/userchange',$data); 
		  $this->load->view('admin/footer',$data);
		}
		else 
        {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
	}
	
	/* Code Added  by tricore.dev 10   Date : 06/12/14  start here */
					/* Ajax cast dropdown */		
	 function get_cast()
    {
        $religion = $_REQUEST['religion_id'];   
        $result = $this->usermanage->get_cast($religion);         
        
        foreach($result as $key=>$val)
        {                 
            echo '<option value="'.$key.'">'.$val.'</option>';
        }
        
    }
	/* Code Added  by tricore.dev 10   Date : 06/12/14  ended here */
	
	
	
	
    
    
  
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
