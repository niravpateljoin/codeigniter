<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class M_login extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
 
    function login($username, $password) 
    {
        //create query to connect user login database
        $this->db->select('id, username, password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
         
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
    
    function getprofile()
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from admin where id = 1 ') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	public function edit_profile()
	{				  
		  
		   
		   if($this->input->post('cpassword') != '')
		   {
			   $editdata = array(
			   'firstname'=>$this->input->post('firstname'),
		       'lastname'=>$this->input->post('lastname'),
		       'email'=>$this->input->post('email'),
		       'username' => $this->input->post('username'), 
			   'password' => md5($this->input->post('cpassword'))
			   );
		   }
		   else
		   {
			 $editdata = array(   
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'username' => $this->input->post('username')   
		   );
			   
		   }
		  
		  $this->db->where('id', 1);
		  
		  $this->db->update('admin',$editdata);		 
	}
	
	public function show_profile()
	{		
		
	   $query = $this->db->query('select * from admin where id = 1 ') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
    
   
	
	function getAdmin($adminid)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from admin where id != 1') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getAdminview($aid)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from admin where id = "'.$aid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getDeleteview($did)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('delete from admin where id = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		   // 'id' => $this->input->post(''),  
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'username' => $this->input->post('username'), 
			'password'=>md5($this->input->post('password'))   
		   );
		  
		  
		  $this->db->insert('admin',$datsa) ;		 
	}
	
	public function edit_admin($sid)
	{				  
		  
		   
		   if($this->input->post('cpassword') != '')
		   {
			   $editdata = array(
			   'firstname'=>$this->input->post('firstname'),
		       'lastname'=>$this->input->post('lastname'),
		       'email'=>$this->input->post('email'),
		       'username' => $this->input->post('username'), 
			   'password' => md5($this->input->post('cpassword'))
			   );
		   }
		   else
		   {
			 $editdata = array(   
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'username' => $this->input->post('username')   
		   );
			   
		   }
		  
		  $this->db->where('id', $sid);
		  
		  $this->db->update('admin',$editdata);		 
	}
	
	public function show_admin($sid)
	{		
		
	   $query = $this->db->query('select * from admin where id = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
	
	public function count_admin()
	{
		$query = $this->db->query('select * from admin') or die(mysql_error());
		return $query->num_rows();
	}
	public function count_user()
	{
		$query = $this->db->query('select * from user') or die(mysql_error());
		return $query->num_rows();
	}
	public function count_mother()
	{
		$query = $this->db->query('select * from mothertongue') or die(mysql_error());
		return $query->num_rows();
	}
	public function count_religion()
	{
		$query = $this->db->query('select * from religion') or die(mysql_error());
		return $query->num_rows();
	}
	
	
	
	
	
}
  
