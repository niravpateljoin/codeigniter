<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller 
{
   public function __construct() 
   {
        parent::__construct();
       $this->load->model('registration_model');
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));        
   }
 
   public function index() 
   {
	   $data['profiles'] = $this->registration_model->getprofile();
	   $data['religions'] = $this->registration_model->getreligion();
	   $data['mothers'] = $this->registration_model->getmother();
	   $data['livings'] = $this->registration_model->getliving();
	  
	   $this->load->view('search',$data);
	   
   }
   
   public function searchby() 
   {
	   if($this->input->post())
	   {
			$username = $this->input->post('username');   
			$email = $this->input->post('email');   
			$gender = $this->input->post('gender');  
            $first_name = $this->input->post('firstname');
            $last_name = $this->input->post('lastname');
            $livingin = $this->input->post('livingin');
			
						
			$query = 'username LIKE "'.$username.'%"';	
			 
			if($livingin != '0' && $query != '')
			{
			  $query .= 'and livingin LIKE "'.$livingin.'%"';			
			}	
				
			if($email != '' && $query != '')
			{
			  $query .= 	' and email LIKE "'.$email.'%"';			
			}
			
			if($gender != '' && $query != '')
			{
			 $query .= 	' and gender LIKE "'.$gender.'%"';			
			}
			
			if($first_name != '' && $query != '')
			{
			 $query .= 	' and first_name LIKE "'.$first_name.'%"';			
			}
			
			if($last_name != '' && $query != '')
			{
			 $query .= 	' and last_name LIKE "'.$last_name.'%"';			 
			}
						
			$query = mysql_query('select * from user where '.$query);
			
			$found = mysql_num_rows($query);
		
			if($found > 0) 
			{
				echo "<table border='0'>";
				echo "<tr><td>First Name</td><td>Last Name</td><td>User Name</td></tr>";
				while($row = mysql_fetch_array($query)) 
				{ 				
					echo "<tr><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['username']."</td></tr>";							   
				}
				echo "</table>";	    
			} 
			
					   
	    }
	   	   
    }
     
}
