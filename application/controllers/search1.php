<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search1 extends CI_Controller 
{
   public function __construct() 
   {
        parent::__construct();
       $this->load->model('registration_model');
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));        
   }
    
   
   public function searchby() 
   {	   
		$firstname = $_POST["title"];
		$result = mysql_query(" SELECT * FROM user where first_name like '$firstname%' or last_name like '$firstname%' or username like '$firstname%' ") or die(mysql_error());
		$found = mysql_num_rows($result);
		
		if($found > 0) 
		{
			echo "<table border='0'>";
			echo "<tr><td>First Name</td><td>Last Name</td><td>User Name</td></tr>";
			while($row = mysql_fetch_array($result)) 
			{ 				
				echo "<tr><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['username']."</td></tr>";							   
			}
			echo "</table>";	    
		} 
	
	}   
     
}
