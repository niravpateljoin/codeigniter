<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {
	
   public function __construct() {
        parent::__construct();
        
        $this->load->library(array('form_validation','session'));
	}
 
   public function index() 
   {
	   $data['test']  = "Comming Soon";
	   $this->load->view('test',$data); 
	   $this->load->view('header', $data);
	   $this->load->view('navbar', $data);
	   $this->load->view('rightsidebar', $data);            
	   	 
   }
   
   public function login() 
   {
	   $username = $this->input->post('username');
	   $password = $this->input->post('password');
	   $query = $this->db->query("SELECT * FROM registration WHERE username='$username' AND password='$password'") or die(mysql_error());
	   
	   if($query->num_rows() > 0)
	   {
		  $this->session->set_userdata('username',$username); 
		  echo "true";   
	   }   
	   else
	   {
		   echo "false";
	   }	   	 
   }
   
   public function logout()
   {
	   $this->session->sess_destroy();
	   redirect('front', 'refresh');
   } 
   
     
 }
