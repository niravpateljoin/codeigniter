<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
   public function __construct() {
        parent::__construct();
	}
 
   public function index() 
   {
	   $data['title']  = "Matri Monial Site";	   
	   $this->load->view('header', $data);
	   $this->load->view('navbar', $data);
	   $this->load->view('rightsidebar', $data);            
	 //  $this->load->view('profile', $data);
	   $this->load->view('footer', $data);		 
   }
   
 }
