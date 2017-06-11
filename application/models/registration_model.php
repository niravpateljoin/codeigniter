<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class registration_model extends CI_Model 
	{
	 
		 public function __construct()
		 {
		  parent::__construct();
		   $this->load->database();
		 } 
		 
		 public function add_user()
		 {		  
			  $data=array(
			  
			'username' => $this->input->post('username'),
		    'email'=>$this->input->post('email'),
		    'password'=>$this->input->post('password'),
		    'profile'=>$this->input->post('profile'),
		    'first_name'=>$this->input->post('firstname'),
		    'last_name'=>$this->input->post('lastname'),
		    'gender'=>$this->input->post('gender'),		     
			'dob' => $this->input->post('birth_date'),
			'religion' => $this->input->post('religion'),
			'mtongue' => $this->input->post('mothertongue'),
			'livingin' => $this->input->post('livingin'),			
			'address' => $this->input->post('address1'),
			'contact_no' => $this->input->post('contact_no')    
			  );
			  
			  $this->db->insert('user',$data);		 
		 }
		 
	   public function getprofile()
		{				
		   $query = $this->db->query('select * from profile') or die(mysql_error());
			
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return array();	 
		}
	
		public function getreligion()
		{				
		   $query = $this->db->query('select * from religion') or die(mysql_error());
			
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return array();	 
		}
	
		public function getmother()
		{				
		   $query = $this->db->query('select * from mothertongue') or die(mysql_error());
			
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return array();	 
		}
	
		public function getliving()
		{				
		   $query = $this->db->query('select * from living') or die(mysql_error());
			
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return array();	 
		}
		 			 
	}
?>
