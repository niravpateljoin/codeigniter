<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Usermanage extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
 	
	function getuser()
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from user') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getuserview($aid)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from user where id = "'.$aid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getDeleteview($did)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('delete from user where id = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		    
		    'username' => $this->input->post('username'),
		    'email'=>$this->input->post('email'),
		    'password'=>$this->input->post('password'),
		    'profile'=>$this->input->post('profile'),
		    'first_name'=>$this->input->post('firstname'),
		    'last_name'=>$this->input->post('lastname'),
		    'gender'=>$this->input->post('gender'),		     
			'dob' => $this->input->post('birth_date'),
			'religion' => $this->input->post('religion'),
			'caste' => $this->input->post('cast'),
			'mtongue' => $this->input->post('mothertongue'),
			'livingin' => $this->input->post('livingin'),			
			'address' => $this->input->post('address1'),
			'contact_no' => $this->input->post('contact_no')    
		   );
		  
		  
		  $this->db->insert('user',$datsa) ;		 
	}
	
	public function edit_user($sid)
	{				  
		  
		   $editdata = array(
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
		   		  
		  $this->db->where('id', $sid);
		  
		  $this->db->update('user',$editdata);		 
	}
	
	public function show_user($sid)
	{		
		
	   $query = $this->db->query('select * from user where id = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
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
	
	/* Code Added  by tricore.dev 10   Date : 06/12/14  start here */
					/* Ajax cast dropdown */					
	 function get_cast($religion = null)
    {
        $this->db->select('id,caste_name');
        if($religion != NULL)
        {
            $this->db->where('religionid',$religion);
        }
        $query = $this->db->get('caste');
        if($query->num_rows() >0)
        {
            $casts = array();    
            if($query->result())
            {
                foreach($query->result() as $cast)
                {
                    $casts[$cast->id] = $cast->caste_name;
                }
                return $casts;
            }
            else 
            {
                return FALSE;
            }
        }
    }
	/* Code Added  by tricore.dev 10   Date : 06/12/14  ended here */
	
	
	
	
	
}
  
