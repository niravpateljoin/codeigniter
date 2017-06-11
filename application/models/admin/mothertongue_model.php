<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class mothertongue_model extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
 
    
    
	function getmothertongue()
	{
		//$this->load->library("database");
		
		$query = $this->db->query('select * from mothertongue') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
		
	
	function getDeleteview($did)
	{
		//$this->load->library("database");
		
		$query = $this->db->query('delete from mothertongue where id = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		   // 'id' => $this->input->post(''),  
		    'mother_name'=>$this->input->post('mothertongue_name')   
		   );
		  
		  $this->db->insert('mothertongue',$datsa) ;		 
	}
	
	public function edit_mothertongue($sid)
	{				  
		  
		   $editdata = array(
		       'mother_name'=>$this->input->post('mothertongue_name')
		      			   );
		   		  
		  $this->db->where('id', $sid);
		  
		  $this->db->update('mothertongue',$editdata);		 
	}
	
	public function show_mothertongue($sid)
	{		
		
	   $query = $this->db->query('select * from mothertongue where id = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
	
	
	
	
	
		
	
}
  
