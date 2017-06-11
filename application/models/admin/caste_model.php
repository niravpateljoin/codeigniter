<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class caste_model extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    
    function getcastereligion()
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select caste.id,caste_name,religion_name from caste,religion where (caste.religionid = religion.id)') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
 
    
    
	function getcaste()
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from religion') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
		
	
	function getDeleteview($did)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('delete from caste where id = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		   // 'id' => $this->input->post(''), 
		    'religionid'=>$this->input->post('religion_name'),
		    'caste_name'=>$this->input->post('caste_name')   
		   );
		  
		  $this->db->insert('caste',$datsa) ;		 
	}
	
	public function edit_caste($sid)
	{				  
		  
		   $editdata = array(
		       'religionid'=>$this->input->post('religion_name'), 
		       'caste_name'=>$this->input->post('caste_name')
		      			   );
		   		  
		  $this->db->where('id', $sid);
		  
		  $this->db->update('caste',$editdata);		 
	}
	
	public function show_caste($sid)
	{		
		
	   $query = $this->db->query('select * from caste where id = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
	
	
	
		
	
}
  
