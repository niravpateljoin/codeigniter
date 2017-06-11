<?php

class Logout extends CI_Controller {

    function index()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/c_login'), 'refresh');
    }
}



?>
