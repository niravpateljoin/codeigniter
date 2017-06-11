<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class religion_model extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
 
    
    
	function getreligion()
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
		
		$query = $this->db->query('delete from religion where id = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		   // 'id' => $this->input->post(''),  
		    'religion_name'=>$this->input->post('religion_name')   
		   );
		  
		  $this->db->insert('religion',$datsa) ;		 
	}
	
	public function edit_religion($sid)
	{				  
		  
		   $editdata = array(
		       'religion_name'=>$this->input->post('religion_name')
		      			   );
		   		  
		  $this->db->where('id', $sid);
		  
		  $this->db->update('religion',$editdata);		 
	}
	
	public function show_religion($sid)
	{		
		
	   $query = $this->db->query('select * from religion where id = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
	
	
	
	
		
	
}
  
