<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registration extends CI_Controller {
	
   public function __construct() {
        parent::__construct();
        $this->load->model('registration_model');
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));        
	}
 
   public function index() 
   {
	  
		if($this->input->post())
		{
		
			$this->registration_model->add_user();
			redirect('registration', 'refresh');			
		
		}		
					 
	   $data['profiles'] = $this->registration_model->getprofile();
	   $data['religions'] = $this->registration_model->getreligion();
	   $data['mothers'] = $this->registration_model->getmother();
	   $data['livings'] = $this->registration_model->getliving();

       $this->load->view('registration', $data);     
	   
   }
   
   
}
